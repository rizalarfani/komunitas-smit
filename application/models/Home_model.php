<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    protected $table = 'anggota';
    protected $id = 'id';

    public function insert_data($data)
    {
        $this->db->insert($this->table,$data);
    }
    public function cek_email($email)
    {
        $this->db->select('email');
        $this->db->where('email',$email);
        return $this->db->get($this->table);
    }
}