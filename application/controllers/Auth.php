<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Kosta_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function LoginAction() {
        // Cek apakah request adalah POST
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Ambil data dari input
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Proses login melalui model
            if ($this->Model_auth->process_login($email, $password)) {
                // Set flash message sukses
                $this->setFlash('Berhasil', 'Login Sukses', 'success');
                // Redirect ke halaman admin
                redirect('admin/index', 'refresh');
            } else {
                // Set flash message error
                $this->setFlash('Gagal', 'Periksa kembali e-mail dan passowordnya', 'error');
                // Redirect kembali ke halaman login
                redirect('home/login', 'refresh');
            }
        } else {
            // Jika bukan POST, redirect ke halaman login
            redirect('home/login', 'refresh');
        }
    }

    public function LogoutAction() {
        
        // Hancurkan sesi
        $this->session->sess_destroy();
        
        redirect('/', 'refresh');
        // Set flash message untuk logout sukses
        $this->setFlash('Success', 'Logout Berhasil', 'success');
        // Redirect ke halaman utama
    }
    
}