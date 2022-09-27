<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function index()
    {
        $val = $this->form_validation;
        $val->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s Tidak Boleh Kosong!')
        );
        $val->set_rules(
            'password',
            'Password',
            'required|min_length[6]',
            array('required' => '%s Tidak Boleh Kosong!', 'min_length' => '%s minimal 6 karakter')
        );
        // $rules = $this->AuthModel->rules();
        // $this->form_validation->set_rules($rules);
        
        if($val->run() === FALSE){
			return $this->load->view('admin/auth/login');
		}

        $username = $this->input->post('username');
		$password = $this->input->post('password');

        if($this->AuthModel->login($username, $password)){
			redirect(base_url('admin/dashboard'));
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		}
        $this->load->view('admin/auth/login');
    }

    public function logout()
	{
		$this->AuthModel->logout();
		redirect(site_url());
	}

}

/* End of file Auth.php */

?>