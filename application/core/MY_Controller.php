<?php

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
}

class Kosta_Controller extends MY_Controller
{
    public function __construct() {
        parent::__construct();

        $this->data['flash_message'] = $this->flash();
    }

    // Mengatur pesan flash
    public function setFlash($judul, $pesan, $tipe)
    {
        $data = [
            'title' => $judul,
            'text'  => $pesan,
            'icon'  => $tipe
        ];
        $this->session->set_flashdata($data);
    }

    // Menampilkan pesan flash
    public function flash()
    {
        return [
            'title' => $this->session->flashdata('title'),
            'text' => $this->session->flashdata('text'),
            'icon' => $this->session->flashdata('icon')
        ];
    }

    // public function view($page = null, $data = null)
    // {
    //     return $this->load->view($page, $data);
    // }
}
