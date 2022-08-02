<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function about()
	{
		$this->load->view('aboutpage');
	}

	public function homepage()
	{
		$this->load->view('homepage');
	}

	public function shopping()
	{
		$this->load->view('testdetail');
	}
}
