<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Kosta_Controller {

	var $data = array();

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Model_item');
		// $this->data['flash'] = $this->flash();
	}

	public function index()
	{
		$data['title'] = 'Halaman Home';
		
		$this->load->view('template/header', $data);
		$this->load->view('home/index');
		$this->load->view('template/footer', $this->data);
	}

	public function intransaction()
    {
        $data['title'] = 'Barang Masuk';

        
        $this->load->view('template/header', $data);
        $this->load->view('home/intransaction');
        $this->load->view('template/footer', $this->data);
    }

	public function outtransaction()
    {
        $data['title'] = 'Barang Keluar';
        $data['assets'] = $this->Model_item->getAvailableItem();


        $this->load->view('template/header', $data);
        $this->load->view('home/outtransaction', $data);
        $this->load->view('template/footer', $this->data);
    }

	public function login() {
		$data['title'] = 'Login Page';

        $this->load->view('template/login/header', $data);
        $this->load->view('home/login');
        $this->load->view('template/login/footer', $this->data);
	}

	// public function testOut()
	// {
	// 	var_dump($this->Model_item->getAvailableItem());
	// }
}
