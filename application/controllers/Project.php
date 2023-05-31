<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
		$this->load->model('User_model');
		$this->load->model('Jenisproject_model');
		$this->load->model('Jenisaplikasi_model');
		$this->load->model('Development_model');
		$this->load->model('Sub_model');

	}

	public function index()
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['progrespro'] = $this->Project_model->progresproject();
		$data['donepro'] = $this->Project_model->doneproject();
		$data['allpro'] = $this->Project_model->all();
		$data['stat'] = $this->Project_model->status();
		$data['dev'] = $this->Development_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_dashboard', $data);
		$this->load->view('layout/footer', $data);
	}

	public function done()
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getDone();
		$data['progrespro'] = $this->Project_model->progresproject();
		$data['donepro'] = $this->Project_model->doneproject();
		$data['allpro'] = $this->Project_model->all();
		$data['stat'] = $this->Project_model->status();
		$data['dev'] = $this->Development_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_done', $data);
		$this->load->view('layout/footer', $data);
	}

	public function undone()
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getUndone();
		$data['progrespro'] = $this->Project_model->progresproject();
		$data['donepro'] = $this->Project_model->doneproject();
		$data['allpro'] = $this->Project_model->all();
		$data['stat'] = $this->Project_model->status();
		$data['dev'] = $this->Development_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_undone', $data);
		$this->load->view('layout/footer', $data);
	}
	public function indexlistproject()
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getUndone();
		$data['dev'] = $this->Development_model->get();
		// $data['devbyid'] = $this->Development_model->getkeg($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_list_project', $data);
		$this->load->view('layout/footer', $data);
	}
	public function indexhistory()
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->gethistory();
		$data['dev'] = $this->Development_model->get();
		// $data['devbyid'] = $this->Development_model->getkeg($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_history_project', $data);
		$this->load->view('layout/footer', $data);
	}

	public function indexsearch()
	{

		$keyword = $this->input->get('keyword');
		$data = $this->Project_model->get($keyword);
		$data = array(
			'keyword' => $keyword,
			'data' => $data
		);
		$data['project'] = $this->Project_model->get($keyword);
		$data['dev'] = $this->Development_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_list_project', $data);
		$this->load->view('layout/footer', $data);
	}

	public function tambahproject()
	{

		$data['judul'] = "Halaman Tambah Project";
		$data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['project'] = $this->Project_model->get();
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->form_validation->set_rules('namaaplikasi', 'namaaplikasi', 'required', [
			'required' => 'Nama aplikasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('jenisproject', 'jenisproject', 'required', [
			'required' => 'Jenis Project tidak boleh kosong'
		]);
		$this->form_validation->set_rules('jenisaplikasi', 'jenisaplikasi', 'required', [
			'required' => 'Jenis Aplikasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('target', 'target', 'required', [
			'required' => 'Target Selesai tidak boleh kosong'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("Project/vw_tambah_project", $data);
			$this->load->view("layout/footer");
		} else {
			// $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			// $config['max_size'] = '2048';
			// $config['upload_path'] = './assets/dokumenurf/';
			// $this->load->library('upload', $config);
			// if ($this->upload->do_upload('urf')) {
			// 	$new_image = $this->upload->data('file_name');
			// 	$this->db->set('urf', $new_image);
			// } else {
			// 	echo $this->upload->display_errors();
			// }

			$filename = uniqid();
			$config = array(
				'file_name' => $filename,
				'upload_path' => './assets/dokumenurf/',
				'allowed_types' => 'gif|jpg|png|jpeg|pdf',
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

			$this->load->library('upload', $config);
			$this->upload->do_upload('urf');
			//var_dump( $this->upload->data('file_name'));die();
			$filename = $this->upload->data('file_name');
			$data = array(
				'namaaplikasi' => $this->input->post('namaaplikasi'),
				'jenisproject' => $this->input->post('jenisproject'),
				'jenisaplikasi' => $this->input->post('jenisaplikasi'),
				'tahun' => $this->input->post('tahun'),
				'target' => $this->input->post('target'),
				'tanggalregister' => $this->input->post('tanggalregister'),
				'urf' => $filename,
			);


			// var_dump($data);
			// die();
			$this->Project_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
			redirect('Project/indexlistproject');
		}

	}
	public function detail($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['hitung'] = $this->Project_model->hitung();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_detail_project', $data);
		$this->load->view('layout/footer', $data);
	}

	public function editproject()
	{
		$this->form_validation->set_rules('bobotbrd', 'bobotbrd', 'required|less_than_equal_to[10]', [
			'required' => 'NIK tidak boleh kosong',
		]);
		$this->form_validation->set_rules('progresbrd', 'progresbrd', 'required|less_than_equal_to[10]', [
			'required' => 'Nama User tidak boleh kosong',
			'less_than_equal_to[10]' => 'Progres tidak boleh lebih dari 10'
		]);

		$id = $this->input->post('id_project');
		$data = array(
			'namaaplikasi' => $this->input->post('namaaplikasi'),
			'jenisproject' => $this->input->post('jenisproject'),
			'jenisaplikasi' => $this->input->post('jenisaplikasi'),
			'tahun' => $this->input->post('tahun'),
			'keterangan' => $this->input->post('keterangan'),
			'target' => $this->input->post('target'),
			'tanggalregister' => $this->input->post('tanggalregister')
		);
		$upload_image = $_FILES['urf']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumenurf/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('urf')) {
				$old_image = $data['tb_project']['urf'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumenurf/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('urf', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detail/' . $id);
	}

	public function hapusproject($id)
	{
		$this->Project_model->delete($id);
		redirect('Project/indexlistproject');
	}

	public function detailbrd($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_brd", $data);
		$this->load->view("layout/footer");
	}
	public function editbrd()
	{
		$this->form_validation->set_rules('bobotbrd', 'bobotbrd', 'required|less_than_equal_to[10]', [
			'required' => 'NIK tidak boleh kosong',
		]);
		$this->form_validation->set_rules('progresbrd', 'progresbrd', 'required|less_than_equal_to[10]', [
			'required' => 'Nama User tidak boleh kosong',
			'less_than_equal_to[10]' => 'Progres tidak boleh lebih dari 10'
		]);

		$id = $this->input->post('id_project');
		$data = array(
			'bobotbrd' => $this->input->post('bobotbrd'),
			'progresbrd' => $this->input->post('progresbrd'),
			'planstdatebrd' => $this->input->post('planstdatebrd'),
			'planendatebrd' => $this->input->post('planendatebrd'),
			'actualstdatebrd' => $this->input->post('actualstdatebrd'),
			'actualendatebrd' => $this->input->post('actualendatebrd'),
			'status' => 'Terakhir Diubah BRD'
		);
		$upload_image = $_FILES['filebrd']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumenbrd/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('filebrd')) {
				$old_image = $data['tb_project']['filebrd'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumenbrd/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('filebrd', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detailbrd/' . $id);
	}

	public function detailfsd($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_fsd", $data);
		$this->load->view("layout/footer");
	}
	public function editfsd()
	{

		$id = $this->input->post('id_project');
		$data = array(
			'bobotfsd' => $this->input->post('bobotfsd'),
			'progresfsd' => $this->input->post('progresfsd'),
			'planstdatefsd' => $this->input->post('planstdatefsd'),
			'planendatefsd' => $this->input->post('planendatefsd'),
			'actualstdatefsd' => $this->input->post('actualstdatefsd'),
			'actualendatefsd' => $this->input->post('actualendatefsd'),
			'status' => 'Terakhir Diubah FSD'
		);
		$upload_image = $_FILES['filefsd']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumenfsd/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('filefsd')) {
				$old_image = $data['tb_project']['filefsd'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumenfsd/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('filefsd', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
		redirect('project/detailfsd/' . $id);
	}

	public function detaildev($id)
	{
		
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['dev1'] = $this->Development_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		// $data = [
		// 	'idDetailDev'=> $id,
		// ];  
		// $this->session->set_userdata($data);

		// var_dump($data['dev']);
		// die();
		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_dev", $data);
		$this->load->view("layout/footer");
	}
	public function editdev($id)
	{

		$data['judul'] = "";
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getById($id);
		$data['dev'] = $this->Development_model->get();
		$bobot = $this->Development_model->getBobot($id);
		$bobotawal = $this->Development_model->getBobot1($id);
		$progres = $this->Development_model->getProgres($id);
		
		// var_dump();
		// die();
		$filename = uniqid();
		$config = array(
			'file_name' => $filename,
			'upload_path' => './assets/dokumendev/',
			'allowed_types' => 'gif|jpg|png|jpeg|pdf',
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
		//var_dump( $this->upload->data('file_name'));die();
		$filename = $this->upload->data('file_name');
		if ($bobot['bobot'] + $this->input->post('bobot') <= 60) {
			if ($this->input->post('progres') <= $this->input->post('bobot') ) {
				$data['dev1'] = $this->Development_model->getById($id);
				$id = $this->input->post('project_id');
				$data = [
					'project_id' => $this->input->post('project_id'),
					'namakeg' => $this->input->post('namakeg'),
					'bobot' => $this->input->post('bobot'),
					'progres' => $this->input->post('progres'),
					'planstdate' => $this->input->post('planstdate'),
					'planendate' => $this->input->post('planendate'),
					'actualstdate' => $this->input->post('actualstdate'),
					'actualendate' => $this->input->post('actualendate'),
					'file' => $filename
				];
				$data1 = array(
					'bobot' => $this->input->post('bobot'),
					'progres' => $this->input->post('progres'),
					'planstdate' => $this->input->post('planstdate'),
					'planendate' => $this->input->post('planendate'),
					'actualstdate' => $this->input->post('actualstdate'),
					'actualendate' => $this->input->post('actualendate'),
					'file' => $filename,
					'status' => 'Terakhir Diubah Development'
				);
				
				$this->Project_model->ubah($data1, $id);
				// var_dump($id);
				// die();
			
				$this->Development_model->insert($data);
				$this->session->set_flashdata('acc', 'Data baru ditambah!');
			}else{
				$this->session->set_flashdata('err', 'Progres tidak boleh melebihi bobot!');
			}
			
			
		} else if ($bobot['bobot'] + $this->input->post('bobot') > 60) {
			$this->session->set_flashdata('err', 'Data tidak dapat ditambah karena total bobot dapat melebihi 60!');
		}
		redirect('Project/detaildev/' . $id);
	}

	public function subdev($id)
	{

		$data['judul'] = "";
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getById($id);
		$dev = $this->Development_model->getDev($this->input->post('id_dev'));
		$sub = $this->Sub_model->getDev($this->input->post('id_dev'));
		$data['dev'] = $this->Development_model->get();
		
		// $bobot = $this->Development_model->getBobot($id);
		$filename = uniqid();
		$config = array(
			'file_name' => $filename,
			'upload_path' => './assets/dokumendev/',
			'allowed_types' => 'gif|jpg|png|jpeg|pdf',
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
		//var_dump( $this->upload->data('file_name'));die();
		$filename = $this->upload->data('file_name');
		$data = [
			'id_dev' => $this->input->post('id_dev'),
			'namakeg' => $this->input->post('namakeg'),
			'bobot' => $this->input->post('bobot'),
			'progres' => $this->input->post('progres'),
			'planstdate' => $this->input->post('planstdate'),
			'planendate' => $this->input->post('planendate'),
			'actualstdate' => $this->input->post('actualstdate'),
			'actualendate' => $this->input->post('actualendate'),
			'file' => $filename
		];
		if($sub[0]->bobot+$this->input->post('bobot') <= $dev[0]->bobot){
			$this->Sub_model->insert($data);
			$this->session->set_flashdata('acc', 'Data baru ditambah!');
		}else{
			$this->session->set_flashdata('err', 'Data baru tidak dapat ditambah!');
		}
		redirect('Project/detaildev/' . $id);
	}

	public function hapuskeg($id)
	{
		$idd = $this->Development_model->getidd($id);
		$this->Development_model->deletekeg($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Data Penghapusan Berhasil dihapus!</div>');
		redirect('Project/detaildev/' . $idd->project_id);
	}

	public function ubahdev($id)
	{
		$data['judul'] = "";
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->getById($id);
		$data['project1'] = $this->Project_model->getById($id);
		$data['dev'] = $this->Development_model->get();
		$data['dev1'] = $this->Development_model->getById($id);
		$bobot = $this->Development_model->getBobot($id);
		$bobotawal = $this->Development_model->getBobot1($id);
		$progres = $this->Development_model->getProgres($id);
		$idd = $this->input->post('project_id');
		$filename = uniqid();
		$config = array(
			'file_name' => $filename,
			'upload_path' => './assets/dokumendev/',
			'allowed_types' => 'gif|jpg|png|jpeg|pdf',
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		);
		// if ($bobotawal['bobot'] + $this->input->post('bobot') < $progres['progres'] + $this->input->post('progres') ) {
		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
		//var_dump( $this->upload->data('file_name'));die();
		$filename = $this->upload->data('file_name');
		$data = [
			'bobot' => $this->input->post('bobotbrd'),
			'progres' => $this->input->post('progresbrd'),
			'planstdate' => $this->input->post('planstdatebrd'),
			'planendate' => $this->input->post('planendatebrd'),
			'actualstdate' => $this->input->post('actualstdatebrd'),
			'actualendate' => $this->input->post('actualendatebrd'),
			'file' => $filename,
		];
		$data1 = array(
			'bobotdev' => $this->input->post('bobotbrd'),
			'progresdev' => $this->input->post('progresbrd'),
			'planstdatedev' => $this->input->post('planstdatebrd'),
			'planendatedev' => $this->input->post('planendatebrd'),
			'actualstdatedev' => $this->input->post('actualstdatebrd'),
			'actualendatedev' => $this->input->post('actualendatebrd'),
			'filedev' => $filename,
			'status' => 'Terakhir Diubah Development'
		);
		
		$this->Project_model->ubah($data1, $idd);
		$this->Development_model->ubah($data, $id);
		redirect('Project/detaildev/' . $idd);
	// }else{
	// 	$this->session->set_flashdata('err', 'Progres tidak boleh melebihi bobot!');
	// }
	}

	public function detailsit($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_sit", $data);
		$this->load->view("layout/footer");
	}
	public function editsit()
	{

		$id = $this->input->post('id_project');
		$data = array(
			'bobotsit' => $this->input->post('bobotsit'),
			'progressit' => $this->input->post('progressit'),
			'planstdatesit' => $this->input->post('planstdatesit'),
			'planendatesit' => $this->input->post('planendatesit'),
			'actualstdatesit' => $this->input->post('actualstdatesit'),
			'actualendatesit' => $this->input->post('actualendatesit'),
			'status' => 'Terakhir Diubah SIT'
		);
		$upload_image = $_FILES['filesit']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumensit/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('filesit')) {
				$old_image = $data['tb_project']['filesit'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumensit/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('filesit', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detailsit/' . $id);
	}
	public function detailuat($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_uat", $data);
		$this->load->view("layout/footer");
	}
	public function edituat()
	{

		$id = $this->input->post('id_project');
		$data = array(
			'bobotuat' => $this->input->post('bobotuat'),
			'progresuat' => $this->input->post('progresuat'),
			'planstdateuat' => $this->input->post('planstdateuat'),
			'planendateuat' => $this->input->post('planendateuat'),
			'actualstdateuat' => $this->input->post('actualstdateuat'),
			'actualendateuat' => $this->input->post('actualendateuat'),
			'status' => 'Terakhir Diubah UAT'
		);
		$upload_image = $_FILES['fileuat']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumenuat/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('fileuat')) {
				$old_image = $data['tb_project']['fileuat'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumenuat/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('fileuat', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detailuat/' . $id);
	}
	public function detailmigrasi($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['project1'] = $this->Project_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->load->view("layout/header", $data);
		$this->load->view("Project/kegiatan/vw_migrasi", $data);
		$this->load->view("layout/footer");
	}
	public function editmigrasi()
	{

		$id = $this->input->post('id_project');
		$data = array(
			'bobotmigrasi' => $this->input->post('bobotmigrasi'),
			'progresmigrasi' => $this->input->post('progresmigrasi'),
			'planstdatemigrasi' => $this->input->post('planstdatemigrasi'),
			'planendatemigrasi' => $this->input->post('planendatemigrasi'),
			'actualstdatemigrasi' => $this->input->post('actualstdatemigrasi'),
			'actualendatemigrasi' => $this->input->post('actualendatemigrasi'),
			'status' => 'Terakhir Diubah Migrasi'
		);
		$upload_image = $_FILES['filemigrasi']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/dokumenmigrasi/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('filemigrasi')) {
				$old_image = $data['tb_project']['filemigrasi'];
				if ($old_image != 'default.png') {
					unlink(FCPATH . 'assets/dokumenmigrasi/' . $old_image);
				}
				$new_image = $this->upload->data('file_name');
				$this->db->set('filemigrasi', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$this->Project_model->ubah($data, $id, $upload_image);
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detailmigrasi/' . $id);
	}
}
	
