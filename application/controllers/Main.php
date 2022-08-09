<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('content/homepage');
		$this->load->view('layout/footer');
	}
	
	public function detailproduct()
	{
		$this->load->view('layout/header');
		$this->load->view('content/detailbarang');
		$this->load->view('layout/footer');
	}

	public function shopping()
	{
		$this->load->view('layout/header');
		$this->load->view('content/shoppage');
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('content/aboutpage');
		$this->load->view('layout/footer');
	}

	public function koleksi()
	{
		$this->load->view('layout/header');
		$this->load->view('content/test');
		$this->load->view('layout/footer');
	}
}
