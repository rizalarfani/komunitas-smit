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
        $this->load->model('Home_model','home');
        if(isset($_POST['tambah'])){
            $this->form_validation->set_rules('name_lengkap', 'Nama Lengkap', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[5]|max_length[8]|numeric');
            $this->form_validation->set_rules('no_wa', 'Nomor WA', 'trim|required|min_length[12]|max_length[13]|numeric');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'trim|required');
            $this->form_validation->set_rules('motivasi', 'Motivasi', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $nama = trim(htmlspecialchars($this->input->post('name_lengkap',true)));
                $email = htmlspecialchars($this->input->post('email',true));
                $nim = trim(htmlspecialchars($this->input->post('nim',true)));
                $no_wa = trim(htmlspecialchars($this->input->post('no_wa',true)));
                $jenis_kelamin = trim(htmlspecialchars($this->input->post('jenis_kelamin',true)));
                $prodi = trim(htmlspecialchars($this->input->post('prodi',true)));
                $motivasi = trim(htmlspecialchars($this->input->post('motivasi',true)));
                $cek_email = $this->home->cek_email($email)->row();
                // echo count([$cek_email]);die;
                if($cek_email){
                   $this->session->set_flashdata('info', 'Maaf Email sudah terdaftar');
                   redirect('pendaftaran');
                }
                $data = [
                    'full_name' => $nama,
                    'nim' => $nim,
                    'email' => $email,
                    'no_wa' => $no_wa,
                    'jenis_kelamin' => $jenis_kelamin,
                    'prodi' => $prodi,
                    'motivasi' => $motivasi
                ];
                $this->home->insert_data($data);
                $this->send_email($email,'send_wa');
                $this->session->set_flashdata('info', 'Berhasil daftar sebagai anggota!!Silahkan cek email untuk masuk group');
                redirect("pendaftaran");
            } else {
                $data['title'] = "Pendaftaran Anggokat";
                $this->load->view('frontend/template/header',$data);
                $this->load->view('frontend/home/pendaftaran');
                $this->load->view('frontend/template/footer');
            }
        }
        $data['title'] = "Pendaftaran Anggokat";
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/home/pendaftaran');
        $this->load->view('frontend/template/footer');
    }

    public function create_anggota_post()
    {
        $this->load->model('Home_model','home');
        if(isset($_POST['tambah'])){
            $this->form_validation->set_rules('name_lengkap', 'Nama Lengkap', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('nim', 'nim', 'trim|required|min_length[5]|max_length[8]|numeric');
            $this->form_validation->set_rules('no_wa', 'Nomor WA', 'trim|required|min_length[12]|max_length[13]|numeric');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'trim|required');
            $this->form_validation->set_rules('motivasi', 'Motivasi', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $nama = trim(htmlspecialchars($this->input->post('name_lengkap',true)));
                $email = htmlspecialchars($this->input->post('email',true));
                $nim = trim(htmlspecialchars($this->input->post('nim',true)));
                $no_wa = trim(htmlspecialchars($this->input->post('no_wa',true)));
                $jenis_kelamin = trim(htmlspecialchars($this->input->post('jenis_kelamin',true)));
                $prodi = trim(htmlspecialchars($this->input->post('prodi',true)));
                $motivasi = trim(htmlspecialchars($this->input->post('motivasi',true)));
                $cek_email = $this->home->cek_email($email)->row();
                // echo count([$cek_email]);die;
                if($cek_email){
                   $this->session->set_flashdata('info', 'Maaf Email sudah terdaftar');
                   redirect('pendaftaran');
                }
                $data = [
                    'full_name' => $nama,
                    'nim' => $nim,
                    'email' => $email,
                    'no_wa' => $no_wa,
                    'jenis_kelamin' => $jenis_kelamin,
                    'prodi' => $prodi,
                    'motivasi' => $motivasi
                ];
                $this->home->insert_data($data);
                $this->send_email($email,'send_wa');
                $this->session->set_flashdata('info', 'Berhasil daftar sebagai anggota!!Silahkan cek email untuk masuk group');
                redirect("pendaftaran");
            } else {
                $data['title'] = "Pendaftaran Anggokat";
                $this->load->view('frontend/template/header',$data);
                $this->load->view('frontend/home/pendaftaran');
                $this->load->view('frontend/template/footer');
            }
            
        }
    }
    private function send_email($email,$type)
    {
        $from_email = "arfanirizal22@gmail.com";
        if(empty($email)){
            redirect('home');
        }
        if($type == 'send_wa'){
            $config = [
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'arfani12345',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            ];
            $this->load->library('email',$config);
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($from_email,"Admin SMIT");
            $this->email->to($email);
            $this->email->subject('Angota Baru');
            $this->email->message('Selamat anda sudah menjadi anggota baru <a href='.base_url('auth/changePassword?email='.$email.'').'>Reset Password</a>');
            if ($this->email->send()) {
                $this->session->set_flashdata('info', 'Berhasil kirim email');
                redirect('pendaftaran');
            }else{
                echo $this->email->print_debugger();die;
            }
        }
    }
}