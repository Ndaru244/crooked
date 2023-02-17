<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{
    private $_table = "users";
    const SESSION_KEY = 'id_user';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                ['required' => 'Email wajib Diisi!']
                
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[6]'
            ]
        ];
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->_table);
        $user = $query->row();

        // cek user terdaftar?
        if (!$user) {
            return FALSE;
        }

        // cek passwordnya benar?
        if (!password_verify($password, $user->password)) {
            return FALSE;
        }

        // buat session
        $this->session->set_userdata([self::SESSION_KEY => $user->id_user]);
        
        return $this->session->has_userdata(self::SESSION_KEY);
    }

    public function current_user()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->_table, ['id_user' => $user_id]);
        return $query->row();
    }
    public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}
}

/* End of file Auth.php */
