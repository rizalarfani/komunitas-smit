<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Universal_model','universal');
        if($this->session->userdata('is_login') != true){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Data Anggota";

        $data['anggota'] = $this->universal->get_anggota()->result();
        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/sidebar');
        $this->load->view('backend/template/navbar');
        $this->load->view('backend/anggota/anggota',$data);
        $this->load->view('backend/template/footer');
    }
}