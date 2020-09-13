<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universal_model extends CI_Model{
   public function count_angota()
    {
       $this->db->select('id');
       return $this->db->get('anggota');
    }

    public function get_anggota()
    {
        $this->db->select('*');
        $this->db->order_by('id','ACS');
        return $this->db->get('anggota');
    }

    public function new_anggota($id = null)
    {
        if($id == null){
            $this->db->select('id,full_name,nim,email,prodi');
            $this->db->order_by('id','ACS');
            $this->db->limit(10);
            return $this->db->get('anggota');
        }
    }
}