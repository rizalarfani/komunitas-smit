<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function index()
    {
        $data['title'] = "Login Admin Smit";
        $this->load->view('backend/login',$data);
    }

    public function prosess_login()
    {
        $this->load->model('auth_model','auth');
        if(isset($_POST['login'])){
            $this->form_validation->set_rules('email',"email",'required|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post('email',true);
                $password = $this->input->post('password',true);
                $cek_email = $this->auth->cek_email($email);
                if($cek_email->num_rows() >= 1){
                    if(password_verify($password,$cek_email->row()->password)){
                        $this->session->set_userdata([
                            'is_login' => true,
                            'email' => $cek_email->row()->email
                        ]);
                        $this->session->set_flashdata('info', 'Berhasil Login');
                        redirect('dashboard');
                    }else {
                        $this->session->set_flashdata('info', 'Gagal login');
                        redirect('login');
                    }
                }else {
                    $this->session->set_flashdata('info', 'Gagal login');
                    redirect('login');
                }
            } else {
                echo "mene";die;
                $data['title'] = "Login Admin Smit";
                $this->load->view('backend/login',$data);
            }
            
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
		$this->session->set_flashdata('info','Berhasil logout akun ini!');
		redirect('login');
    }
}