<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{

    public function get($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
    }
    public function getimg($tabel, $idp)
    {
        $this->db->where('id_product', $idp);
        $query = $this->db->get($tabel);
        return $query->result();
    }
    public function get_byid($id, $tabel)
    {
        $this->db->where($id);
        $query = $this->db->get($tabel);
        return $query->row();
    }
    public function post($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }
    public function put($id, $tabel, $data)
    {
        $this->db->where($id);
        return $this->db->update($tabel, $data);
    }
    public function delete($tabel, $id)
    {
        return $this->db->delete($tabel, $id);
    }
}
