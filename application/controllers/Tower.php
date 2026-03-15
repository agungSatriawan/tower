<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
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

	public function update_progress()
	{
		$data['loadMaster'] = $this->Model_tower->loadMaster();
		$data['categories'] = $this->db
			->select('section.name as section, photo_categories.*')
			->from('photo_categories')
			->join('section', 'section.id = photo_categories.section_id', 'left')
			->order_by('photo_categories.section_id', 'ASC')
			->get()
			->result_array();

		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('progress/update_progress', $data);
		$this->load->view('dashboard/footer');
		$this->load->view('dashboard/script');
	}

	public function get_categories($pekerjaan, $site_id)
	{

		$data['categories'] = $this->db
		->select('section.name as section, photo_categories.*')
		->from('photo_categories')
		->join('section', 'section.id = photo_categories.section_id', 'left')
		->where('section.pekerjaan', $pekerjaan)
		->order_by('photo_categories.section_id', 'ASC')
		->get()
		->result_array();
		$data['site_id'] = $site_id;
		$data['pekerjaan'] = $pekerjaan;

		$this->load->view('progress/photo_grid', $data);
	}


	public function test_excel()
	{

		$spreadsheet = new Spreadsheet();

		echo "PhpSpreadsheet Loaded Successfully";
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
			$this->session->set_flashdata('message',
				'<div class="alert alert-success  text-center alert-dismissible fade show"												role="alert">
							  Data Berhasil Ditambahkan
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('tower/master');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center"												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('tower/master');
		}
	}

	public function getSite()
	{
		$id = $this->input->post('id');
		$data = $this->db
			->where('id', $id)
			->get('sites')
			->row_array();

		echo json_encode($data);
	}

	public function update()
	{
		$id = $this->input->post('id');
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

		$res = $this->db->update('sites', $data, ['id' => $id]);
		if ($res) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success  text-center alert-dismissible fade show"												role="alert">
							  Data Berhasil Diupdate
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
			);
			redirect('tower/master');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center"												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('tower/master');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$res = $this->db->delete('sites', ['id' => $id]);
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function get_photos($site_id)
	{

		$photos = $this->db
			->where('site_id', $site_id)
			->get('photos')
			->result_array();

		echo json_encode($photos);
	}

	public function upload_photo()
	{

		$site_id = $this->input->post('site_id');
		$category_id = $this->input->post('category_id');
		$slot = $this->input->post('slot');



		$path = './assets/uploads/site_photos/';

		if (!is_dir($path)) {
			mkdir($path, 0777, true);
		}

		$filename = 'site' . $site_id . '_cat' . $category_id . '_slot' . $slot . '.jpg';

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['file_name'] = $filename;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {

			$data = [
				'site_id' => $site_id,
				'category_id' => $category_id,
				'slot' => $slot,
				'file_path' => $filename
			];

			$this->db->replace('photos', $data);

			echo json_encode(['status' => 'success']);
		} else {

			echo json_encode(['status' => 'error']);
		}
	}

	public function delete_photo()
	{

		$site_id = $this->input->post('site_id');
		$category_id = $this->input->post('category_id');
		$slot = $this->input->post('slot');

		$photo = $this->db
			->where('site_id', $site_id)
			->where('category_id', $category_id)
			->where('slot', $slot)
			->get('photos')
			->row();

		if ($photo) {

			$path = './assets/uploads/site_photos/' . $photo->file_path;

			if (file_exists($path)) {
				unlink($path);
			}

			$this->db
				->where('site_id', $site_id)
				->where('category_id', $category_id)
				->where('slot', $slot)
				->delete('photos');
		}

		echo json_encode(['status' => 'success']);
	}

	public function generate_report($site_id)
	{
		// load template
		$template = FCPATH . 'assets/templates/template_b2s.xlsx';

		if (!file_exists($template)) {
			die('Template tidak ditemukan');
		}

		$spreadsheet = IOFactory::load($template);

		// ambil semua foto site
		$photos = $this->db
			->select('photos.*, photo_categories.section_id')
			->from('photos')
			->join('photo_categories', 'photo_categories.id = photos.category_id')
			->where('photos.site_id', $site_id)
			->get()
			->result();

		foreach ($photos as $photo) {

			// ambil section (untuk sheet_name)
			$section = $this->db
				->get_where('section', ['id' => $photo->section_id])
				->row();

			if (!$section) continue;
			// pilih sheet berdasarkan database
			$sheet = $spreadsheet->getSheetByName($section->sheet_name);

			if (!$sheet) continue;

			// posisi cell foto
			$cell = $this->getPhotoCell($photo->category_id, $photo->slot);

			$imagePath = FCPATH . 'assets/uploads/site_photos/' . $photo->file_path;

			if (!file_exists($imagePath)) continue;

			$drawing = new Drawing();
			$drawing->setPath($imagePath);
			$drawing->setCoordinates($cell);
			$drawing->setHeight(300);
			$drawing->setWorksheet($sheet);
		}

		// download file
		$filename = 'REPORT_' . $site_id . '_' . date('Y-m-d_H-i-s') . '.xlsx';

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
	}
	private function getPhotoCell($category, $slot)
	{

		$map = [

			1 => [
				1 => 'A10',
				2 => 'G10'
			],

			2 => [
				1 => 'G10',
				2 => 'I25'
			],

			3 => [
				1 => 'E35',
				2 => 'I35'
			],

			4 => [
				1 => 'E45',
				2 => 'I45'
			]

		];

		return $map[$category][$slot] ?? 'A1';
	}

}
