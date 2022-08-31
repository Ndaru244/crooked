<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/main');
        $this->load->view('admin/templates/footer');
    }

    public function profile()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/profile/main');
        $this->load->view('admin/templates/footer');
    }

    public function change_pass()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/profile/changePass');
        $this->load->view('admin/templates/footer');
    }

    public function product()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/product/main');
        $this->load->view('admin/templates/footer');
    }

    public function product_add()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/product/add');
        $this->load->view('admin/templates/footer');
    }

    public function product_detail()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/product/detail');
        $this->load->view('admin/templates/footer');
    }

    public function category()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/category/main');
        $this->load->view('admin/templates/footer');
    }

    public function about()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/about/main');
        $this->load->view('admin/templates/footer');
    }

}

/* End of file Dashboard.php */

?>