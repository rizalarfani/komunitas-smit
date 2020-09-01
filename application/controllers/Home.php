<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index()
    {
        $data['title'] = "Profile SMIT";

        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/home/home');
        $this->load->view('frontend/template/footer');
    }

    public function pendaftaran_anggota()
    {
        $data['title'] = "Pendaftaran Anggokat";

        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/home/pendaftaran');
        $this->load->view('frontend/template/footer');
    }
}