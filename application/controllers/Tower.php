<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tower extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Model_tower');
	}
	public function index()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('dashboard/main');
		$this->load->view('dashboard/footer');
		$this->load->view('dashboard/script');
	}

	public function master(){
		$data['loadMaster'] = $this->Model_tower->loadMaster();
	
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('master/index',$data);
		$this->load->view('dashboard/footer');
		$this->load->view('dashboard/script');
	}
}
