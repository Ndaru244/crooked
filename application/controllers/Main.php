<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModels');
    }
	public function index()
	{
		$get = $this->UserModels->get_by_limit('product');
		$data = array(
			'title' => 'Crooked IDN',
            'datas' => $get
		);
		$this->load->view('layout/header',$data);
		$this->load->view('content/homepage',$data);
		$this->load->view('layout/footer');
	}
	
	public function detailproduct($id)
	{
		$id_product = array('id_product' => $id);
		$get = $this->UserModels->get_byid($id_product, 'product');
		$getimg = $this->UserModels->getimg('picture', $id);
		$getcat = $this->UserModels->get('category');
		$data = array(
			'title'		=> 'Crooked IDN | Detail Product',
			'datas'		=> $get,
			'dataimg'	=> $getimg,
			'getcat'	=> $getcat
		);

		$this->load->view('layout/header',$data);
		$this->load->view('content/detailbarang',$data);
		$this->load->view('layout/footer');
	}

	public function shopping()
	{
		//konfigurasi pagination
		$config['base_url'] = base_url('main/shopping');
		$config['total_rows'] = $this->db->count_all('product');
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config['num_links'] = floor($choice);

		//Style pagination
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = '<b>&gt;</b>';
		$config['prev_link'] = '<b>&lt;</b>';
		$config['full_tag_open'] = '<div class="pagination justify-content-center">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a class="active" href="">';
		$config['cur_tag_close'] = '</a>';
		
		$this->pagination->initialize($config);
		$dta['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data = array(
			'title'		=> 'Crooked IDN | Shopping',
			'data'		=> $this->UserModels->pagination($config["per_page"], $dta['page']),
			'pagination'	=> $this->pagination->create_links()
		);
		
		$this->load->view('layout/header',$data);
		$this->load->view('content/shoppage',$data);
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$get = $this->UserModels->get('about');
		$data = array(
            'title'     => 'Crooked IDN | About',
            'datas'     => $get
        );
		$this->load->view('layout/header',$data);
		$this->load->view('content/aboutpage',$data);
		$this->load->view('layout/footer');
	}

	public function koleksi()
	{
		$this->load->view('layout/header');
		$this->load->view('content/test');
		$this->load->view('layout/footer');
	}
}
