<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Kosta_Controller {
    public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {

        $data['title'] = "Admin | Dashboard";
        $this->load->view('template/Admin/header', $data);
        $this->load->view('template/Admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('template/Admin/footer', $this->data);
    }
}