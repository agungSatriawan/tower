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

	public function add_site()
	{
		$project_id = $this->input->post('project_id');
		$site_name_po = $this->input->post('site_name_po');
		$site_name_tenant = $this->input->post('site_name_tenant');
		$site_id = $this->input->post('site_id');
		$start = $this->input->post('start');
		$done = $this->input->post('done');
		$tenant = $this->input->post('tenant');
		$type_tower = $this->input->post('type_tower');
		$height = $this->input->post('height');
		$alamat = $this->input->post('alamat');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$pekerjaan = $this->input->post('pekerjaan');
		$area = $this->input->post('area');
		$mitra = $this->input->post('mitra');
		$atp_date = $this->input->post('atp_date');
		$executive_general_manager = $this->input->post('executive_general_manager');
		$manager_construction = $this->input->post('manager_construction');
		$gm_area_office = $this->input->post('gm_area_office');
		$manager_const = $this->input->post('manager_const');
		$project_management = $this->input->post('project_management');
		$waspang_area = $this->input->post('waspang_area');

		$data = [
			'project_id' => $project_id,
			'site_name_po' => $site_name_po,
			'site_name_tenant' => $site_name_tenant,
			'site_id' => $site_id,
			'start' => $start,
			'done' => $done,
			'tenant' => $tenant,
			'type_tower' => $type_tower,
			'height' => $height,
			'alamat' => $alamat,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'pekerjaan' => $pekerjaan,
			'area' => $area,
			'mitra' => $mitra,
			'atp_date' => $atp_date,
			'executive_general_manager' => $executive_general_manager,
			'manager_construction' => $manager_construction,
			'gm_area_office' => $gm_area_office,
			'manager_const' => $manager_const,
			'project_management' => $project_management,
			'waspang_area' => $waspang_area
		];

		$res = $this->db->insert('sites', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('tower/master');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('tower/master');
		}
	}
	
}
