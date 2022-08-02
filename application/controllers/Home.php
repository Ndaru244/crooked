<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('homepage');
	}
	
	public function detailproduct()
	{
		$this->load->view('detailbarang');
	}

	public function shopping()
	{
		$this->load->view('testdetail');
	}

	public function about()
	{
		$this->load->view('aboutpage');
	}
}
