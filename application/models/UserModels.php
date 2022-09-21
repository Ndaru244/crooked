<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserModels extends CI_Model
{
    public function get($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
    }

    public function get_by_limit($table)
    {

        $this->db->limit(8);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_byid($id, $tabel)
    {
        $this->db->where($id);
        $query = $this->db->get($tabel);
        return $query->row();
    }

    public function getimg($tabel, $idp)
    {
        $this->db->where('id_product', $idp);
        $this->db->limit(3);
        $query = $this->db->get($tabel);
        return $query->result();
    }

    public function countbycat($idcat, $tabel){
        $this->db->where('id_category',$idcat);
        $this->db->from($tabel);
        return $this->db->count_all_results();
    }

    public function getbycat($idcat, $tabel, $limit, $start){
        $this->db->where('id_category', $idcat);
        $query = $this->db->get($tabel, $limit, $start);
        return $query;
    }

    function pagination($limit, $start){
        $query = $this->db->get('product', $limit, $start);
        return $query;
    }
}

/* End of file UserModels.php */
