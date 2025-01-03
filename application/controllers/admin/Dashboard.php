<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        $this->load->model('AuthModel');
        if (!$this->AuthModel->current_user()) {
            $this->session->set_flashdata('message_login_error', '
            Login Terlebih Dahulu Sebelum Mengakses Dashboard!!
            ');
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $prd = $this->db->count_all('product');
        $cat = $this->db->count_all('category');

        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title' => 'Dashboard',
            'rprd' => $prd,
            'rcat' => $cat
        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/main', $data);
        $this->load->view('admin/templates/footer');
    }

    /* Profile */
    public function profile($id)
    {
        $id_user = array('id_user' => $id);
        $val = $this->form_validation;
        $val->set_rules(
            'nama_user',
            'Nama User',
            'required',
            array('required' => '%s Harus Di Isi !')
        );
        $val->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s Harus Di Isi !')
        );
        if ($val->run() === FALSE) {
            $get = $this->Models->get_byid($id_user, 'users');
            $data = array(
                "current_user" => $this->AuthModel->current_user(),
                'title' => 'Profil | Settings',
                'datas' => $get
            );
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/profile/main', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama_user'),
                'username'  => $this->input->post('username'),
            );
            $this->Models->put($id_user, 'users', $data);
            $this->session->set_flashdata('sukses', 'Berhasil mengedit data');
            redirect(base_url('admin/profile/' . $id), 'refresh');
        }
    }

    public function change_pass($id)
    {
        $id_user = array('id_user' => $id);
        $val = $this->form_validation;
        $val->set_rules(
            'password',
            'Password Baru',
            'required|min_length[6]',
            array('required' => '%s Harus Di Isi !!', 'min_length' => '%s minimal 6 karakter')
        );
        $val->set_rules(
            'password_confirm',
            'Konfiramsi Password',
            'required|min_length[6]|matches[password]',
            array('required' => '%s Harus Di Isi !', 'min_length' => '%s minimal 6 karakter', 'matches' => '%s tidak sama')
        );
        if ($val->run() === FALSE) {
            $get = $this->Models->get_byid($id_user, 'users');
            $data = array(
                "current_user" => $this->AuthModel->current_user(),
                'title' => 'Profil | Security',
                'datas' => $get
            );
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/profile/changePass', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array(
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );
            $this->Models->put($id_user, 'users', $data);
            $this->session->set_flashdata('sukses', 'Berhasil mengubah Password');
            redirect(base_url('admin/profile/security/' . $id), 'refresh');
        }
    }
    /* End Profile */

    /*Product*/
    public function product()
    {
        $get = $this->Models->get('product');
        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title' => 'Page Produk',
            'datas' => $get

        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/product/main', $data);
        $this->load->view('admin/templates/footer');
    }

    public function product_add()
    {
        $val = $this->form_validation;
        $val->set_rules(
            'product_name',
            'Nama Produk',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'product_price',
            'Harga',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'id_category',
            'Kategori',
            'required',
            array('required' => '%s Harus Dipilih')
        );
        $val->set_rules(
            'product_description',
            'Deskripsi',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_tokopedia',
            'Link Tokopedia',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_shopee',
            'Link Shopee',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_tiktok',
            'Link Tiktok',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_lazada',
            'Link Lazada',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'price_sale',
            'Hagra Sales',
            'min_length[0]',
            array('min_length' => '%s Harus Lebih Dari 0')
        );

        if ($val->run()) {
            $config['upload_path'] = './assets/product_images';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2400';
            $config['max_width'] = '6000';
            $config['max_height'] = '6000';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_picture')) {
                $get_cat = $this->Models->get('category');
                $data = array(
                    "current_user" => $this->AuthModel->current_user(),
                    'title' => 'Page Produk | Tambah',
                    'data_cat' => $get_cat,
                    'error' => $this->upload->display_errors()
                );
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/product/add', $data);
                $this->load->view('admin/templates/footer');
            } else {
                $upload = array('upload_data' => $this->upload->data());

                $config['image_library']    = 'GD2';
                $config['source_image']     = './assets/product_images/' . $upload['upload_data']['file_name'];
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']          = 250;
                $config['height']         = 250;
                $config['thumb_marker']   = NULL;
                $config['new_image']      = './assets/product_images/thumbs/';

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = array(
                    'product_name'          => $this->input->post('product_name'),
                    'product_price'         => $this->input->post('product_price'),
                    'id_category'           => $this->input->post('id_category'),
                    'product_description'   => $this->input->post('product_description'),
                    'link_tokopedia'        => $this->input->post('link_tokopedia'),
                    'link_shopee'           => $this->input->post('link_shopee'),
                    'link_tiktok'           => $this->input->post('link_tiktok'),
                    'link_lazada'           => $this->input->post('link_lazada'),
                    'price_sale'            => $this->input->post('price_sale'),
                    'product_picture'       => $upload['upload_data']['file_name']
                );

                $this->image_lib->clear();
                $this->Models->post('product', $data);
                $this->session->set_flashdata('sukses', 'Berhasil menambah data');
                redirect(base_url('admin/product'), 'refresh');
            }
        }
        $get_cat = $this->Models->get('category');
        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title' => 'Page Produk | Tambah',
            'data_cat' => $get_cat
        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/product/add', $data);
        $this->load->view('admin/templates/footer');
    }

    public function product_edit($id)
    {
        $id_product = array('id_product' => $id);
        $val = $this->form_validation;
        $val->set_rules(
            'product_name',
            'Nama Produk',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'product_price',
            'Harga',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'id_category',
            'Kategori',
            'required',
            array('required' => '%s Harus Dipilih')
        );
        $val->set_rules(
            'product_description',
            'Deskripsi',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_tokopedia',
            'Link Tokopedia',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_shopee',
            'Link Shopee',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_tiktok',
            'Link Tiktok',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'link_lazada',
            'Link Lazada',
            'required',
            array('required' => '%s Harus Diisi')
        );
        $val->set_rules(
            'price_sale',
            'Hagra Sales',
            'min_length[0]',
            array('min_length' => '%s Harus Lebih Dari 0')
        );

        if ($val->run() === FALSE) {
            $get = $this->Models->get_byid($id_product, 'product');
            $get_cat = $this->Models->get('category');
            $data = array(
                "current_user" => $this->AuthModel->current_user(),
                'title' => 'Page Produk | Edit',
                'data_cat' => $get_cat,
                'datas' => $get
            );

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/product/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array(
                'product_name'          => $this->input->post('product_name'),
                'product_price'         => $this->input->post('product_price'),
                'id_category'           => $this->input->post('id_category'),
                'product_description'   => $this->input->post('product_description'),
                'link_tokopedia'        => $this->input->post('link_tokopedia'),
                'link_shopee'           => $this->input->post('link_shopee'),
                'link_tiktok'           => $this->input->post('link_tiktok'),
                'link_lazada'           => $this->input->post('link_lazada'),
                'price_sale'            => $this->input->post('price_sale'),
            );
            $this->Models->put($id_product, 'product', $data);
            $this->session->set_flashdata('sukses', 'Berhasil mengedit data');
            redirect(base_url('admin/product'), 'refresh');
        }
    }

    public function product_detail($id)
    {
        $val = $this->form_validation;
        $val->set_rules(
            'id_product',
            'ID',
            'required',
            array('required' => '%s Harus Diisi',)
        );
        if ($val->run() === FALSE) {
            $id_product = array('id_product' => $id);
            $get    = $this->Models->get_byid($id_product, 'product');
            $getimg = $this->Models->getimg('picture', $id);
            $getcat = $this->Models->getcat('category', $get->id_category);

            $data = array(
                "current_user" => $this->AuthModel->current_user(),
                'title'     => 'Page Product | Detail',
                'datas'     => $get,
                'dataimg'   => $getimg,
                'datacat'   => $getcat
            );

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/product/detail', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $config['upload_path'] = './assets/product_images';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2400';
            $config['max_width'] = '6000';
            $config['max_height'] = '6000';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('picture')) {
                $id_product = array('id_product' => $id);
                $get = $this->Models->get_byid($id_product, 'product');
                $getimg = $this->Models->getimg('picture', $id);

                $data = array(
                    "current_user" => $this->AuthModel->current_user(),
                    'title'     => 'Page Product | Detail',
                    'datas'     => $get,
                    'dataimg'   => $getimg,
                    'error' => $this->upload->display_errors()
                );

                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/product/detail', $data);
                $this->load->view('admin/templates/footer');
            } else {
                $upload = array('upload_data' => $this->upload->data());

                $config['image_library']    = 'GD2';
                $config['source_image']     = './assets/product_images/' . $upload['upload_data']['file_name'];
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']          = 250;
                $config['height']         = 250;
                $config['thumb_marker']   = NULL;
                $config['new_image']      = './assets/product_images/thumbs/';

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = array(
                    'id_product'    => $this->input->post('id_product'),
                    'picture'       => $upload['upload_data']['file_name']
                );

                $this->image_lib->clear();
                $this->Models->post('picture', $data);
                $this->session->set_flashdata('sukses', 'Berhasil menambah data');
                redirect(base_url('admin/product/detail/' . $this->input->post('id_product')), 'refresh');
            }
        }
    }

    public function product_delete($id)
    {
        $id_product = array('id_product' => $id);
        $data = $this->Models->get_byid($id_product, 'product');
        $this->Models->delete('product', $id_product);
        unlink('./assets/product_images/' . $data->product_picture);
        unlink('./assets/product_images/thumbs/' . $data->product_picture);
        $this->session->set_flashdata('sukses', 'Berhasil menghapus data');
        redirect(base_url('admin/product'), 'refresh');
    }
    public function picture_delete($id)
    {
        $id_picture = array('id_picture' => $id);
        $data = $this->Models->get_byid($id_picture, 'picture');
        $this->Models->delete('picture', $id_picture);
        unlink('./assets/product_images/' . $data->picture);
        unlink('./assets/product_images/thumbs/' . $data->picture);
        $this->session->set_flashdata('sukses', 'Berhasil menghapus data');
        redirect(base_url('admin/product/detail/' . $data->id_product), 'refresh');
    }
    /*End Product*/

    /* Category */
    public function category()
    {
        $get = $this->Models->get('category');
        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title' => 'Page Kategori',
            'datas' => $get
        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/category/main', $data);
        $this->load->view('admin/templates/footer');
    }

    public function category_add()
    {
        $val = $this->form_validation;
        $val->set_rules(
            'category_name',
            'Kategori',
            'required|is_unique[category.category_name]',
            array('required' => '%s Harus Di Isi!', 'is_unique' => '%s Sudah Ada!')
        );
        if ($val->run()) {
            $data = array(
                'category_name' => $this->input->post('category_name')
            );
            $this->Models->post('category', $data);
            $this->session->set_flashdata('sukses', 'Berhasil menambah data');
            redirect(base_url('admin/category'), 'refresh');
        }

        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title' => 'Page Kategori | Tambah'
        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/category/add', $data);
        $this->load->view('admin/templates/footer');
    }

    public function category_edit($id)
    {
        $id_category = array('id_category' => $id);
        $val = $this->form_validation;
        $val->set_rules(
            'category_name',
            'Kategori',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );

        if ($val->run() === FALSE) {
            $get = $this->Models->get_byid($id_category, 'category');
            $data = array(
                "current_user" => $this->AuthModel->current_user(),
                'title' => 'Page Kategori | Edit',
                'datas' => $get
            );

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/category/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = array(
                'category_name' => $this->input->post('category_name'),
            );
            $this->Models->put($id_category, 'category', $data);
            $this->session->set_flashdata('sukses', 'Berhasil mengedit data');
            redirect(base_url('admin/category'), 'refresh');
        }
    }

    public function category_delete($id)
    {
        $id_category = array('id_category' => $id);
        $this->Models->delete('category', $id_category);
        $this->session->set_flashdata('sukses', 'Berhasil menghapus data');
        redirect(base_url('admin/category'), 'refresh');
    }
    /* End Category */

    /* About */
    public function about()
    {
        $get = $this->Models->get('about');
        $data = array(
            "current_user" => $this->AuthModel->current_user(),
            'title'     => 'Page About',
            'datas'     => $get
        );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/about/main', $data);
        $this->load->view('admin/templates/footer');
    }

    public function about_update($id)
    {
        $val = $this->form_validation;

        $val->set_rules(
            'about_text',
            'About',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );
        $val->set_rules(
            'address',
            'Alamat',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );
        $val->set_rules(
            'phone_number',
            'No Telpon',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );
        $val->set_rules(
            'instagram',
            'Instagram',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );
        $val->set_rules(
            'tiktok',
            'Tiktok',
            'required',
            array('required' => '%s Harus Di Isi !!')
        );
        if ($val->run() === FALSE) {
            redirect(base_url('admin/about-setting'), 'refresh');
        } else {
            $data = array(
                'about_text' => $this->input->post('about_text'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'instagram' => $this->input->post('instagram'),
                'tiktok' => $this->input->post('tiktok')
            );
            $id_about = array('id_about' => $id);

            $this->Models->put($id_about, 'about', $data);
            $this->session->set_flashdata('sukses', 'Berhasil mengedit data');
            redirect(base_url('admin/about-setting'), 'refresh');
        }
    }
    /* End About */
}

/* End of file Dashboard.php */
