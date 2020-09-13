<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
    protected $table = 'user';
    protected $id = 'id';

    public function cek_email($email)
    {
        $this->db->select('email,password');
        $this->db->where('email',$email);
        return $this->db->get($this->table);
    }
}