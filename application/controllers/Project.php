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
		$this->load->model('Jeniseksternal_model');
		$this->load->model('Development_model');
		$this->load->model('Sub_model');
		$this->load->helper('url');
	}

	public function index()
	{
		////$this->check_session();
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

	public function upload_docURF()
	{

		$config['upload_path'] = './assets/dokumenurf/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config['max_size'] = 2048; 

		$this->load->library('upload', $config);

		$data['file_name'] =  $this->input->post('urf');

		if (!$this->upload->do_upload('urf')) {
            // Jika upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            // Jika upload berhasil, lakukan sesuatu di sini (misalnya, simpan ke database)
            $data = $this->upload->data();
            $filename = $data['file_name'];
            // echo 'File berhasil diunggah dengan nama: ' . $file_name;
        }
    }

	
	public function tambahproject()
{
	$this->load->helper('date');
	$data['judul'] = "Halaman Tambah Project";
	$data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
	$data['project'] = $this->Project_model->get();
	$data['jenisproject'] = $this->Jenisproject_model->get();
	$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
	$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

	$this->form_validation->set_rules('namaaplikasi', 'namaaplikasi', 'required', [
		'required' => 'Required'
	]);
	$this->form_validation->set_rules('jenisproject', 'jenisproject', 'required', [
		'required' => 'Required'
	]);
	$this->form_validation->set_rules('jenisaplikasi', 'jenisaplikasi', 'required', [
		'required' => 'Required'
	]);
	$this->form_validation->set_rules('target', 'target', 'required', [
		'required' => 'Required'
	]);
	// $this->form_validation->set_rules('urf', 'urf', 'required', [
	// 	'required' => 'Target Selesai tidak boleh kosong'
	// ]);
	if ($this->form_validation->run() == false) {
		$this->load->view("layout/header", $data);
		$this->load->view("Project/vw_tambah_project", $data);
		$this->load->view("layout/footer");
	} else {

		$config['upload_path'] = './assets/dokumenurf/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config['max_size'] = 2048;
		$config['file_name'] = $_FILES['urf']['name'];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('urf')) {
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
			redirect('Project/tambahproject');
		} else {
			$fileData = $this->upload->data();
			$filename = $fileData['file_name'];

			$data = array(
				'namaaplikasi' => $this->input->post('namaaplikasi'),
				'jenisproject' => $this->input->post('jenisproject'),
				'jenisaplikasi' => $this->input->post('jenisaplikasi'),
				'tahun' => $this->input->post('tahun'),
				'target' => $this->input->post('target'),
				'tanggalregister' => $this->input->post('tanggalregister'),
				'urf' => $filename,
				'date_created' => time(),
				'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
			);
			$this->Project_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully Added!</div>');
			redirect('Project/indexlistproject');
		}
	}
}


	public function detail($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['projectby'] = $this->Project_model->getBy();
		$data['project1'] = $this->Project_model->getById($id);
		$data['jenisp'] = $this->Project_model->getjenispro($id);
		$data['jenisa'] = $this->Project_model->getjenisapp($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['hitung'] = $this->Project_model->hitung();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_detail_project', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detailhistory($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['projectby'] = $this->Project_model->getBy();
		$data['project1'] = $this->Project_model->getById($id);
		$data['jenisp'] = $this->Project_model->getjenispro($id);
		$data['jenisa'] = $this->Project_model->getjenisapp($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['hitung'] = $this->Project_model->hitung();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_detail_project_history', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detailall($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['projectby'] = $this->Project_model->getBy();
		$data['project1'] = $this->Project_model->getById($id);
		$data['jenisp'] = $this->Project_model->getjenispro($id);
		$data['jenisa'] = $this->Project_model->getjenisapp($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['hitung'] = $this->Project_model->hitung();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_detail_project_all', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detaildash($id)
	{
		$data['user'] = $this->User_model->get();
		$data['project'] = $this->Project_model->get();
		$data['projectby'] = $this->Project_model->getBy();
		$data['project1'] = $this->Project_model->getById($id);
		$data['jenisp'] = $this->Project_model->getjenispro($id);
		$data['jenisa'] = $this->Project_model->getjenisapp($id);
		$data['dev'] = $this->Development_model->getkeg($id);
		$data['jenisproject'] = $this->Jenisproject_model->get();
		$data['jenisaplikasi'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['hitung'] = $this->Project_model->hitung();
		$this->load->view('layout/header', $data);
		$this->load->view('project/vw_detail_dashboard', $data);
		$this->load->view('layout/footer', $data);
	}

	public function editproject()
	{
		$this->load->helper('date');
		$this->form_validation->set_rules('bobotbrd', 'bobotbrd', 'required|less_than_equal_to[10]', [
			'required' => 'required',
		]);
		$this->form_validation->set_rules('progresbrd', 'progresbrd', 'required|less_than_equal_to[10]', [
			'required' => 'required',
			'less_than_equal_to[10]' => 'Progress tidak boleh lebih dari 10'
		]);

		$id = $this->input->post('id_project');
		$data = array(
			'namaaplikasi' => $this->input->post('namaaplikasi'),
			'jenisproject' => $this->input->post('jenisproject'),
			'jenisaplikasi' => $this->input->post('jenisaplikasi'),
			'tahun' => $this->input->post('tahun'),
			'keterangan' => $this->input->post('keterangan'),
			'target' => $this->input->post('target'),
			'tanggalregister' => $this->input->post('tanggalregister'),
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detail/' . $id);
	}

	public function hapusproject($id)
	{
		$this->Project_model->delete($id);
		redirect('Project/index');
	}

	public function hapusproject2($id)
	{
		$this->Project_model->delete($id);
		redirect('Project/indexlistproject');
	}

	public function hapusproject3($id)
	{
		$this->Project_model->delete($id);
		redirect('Project/indexlisthistory');
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
		$this->load->helper('date');
		$this->form_validation->set_rules('bobotbrd', 'bobotbrd', 'required|less_than_equal_to[10]', [
			'required' => 'required',
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
			'status' => 'Last Changed BRD',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
		$this->load->helper('date');
		$id = $this->input->post('id_project');
		$data = array(
			'bobotfsd' => $this->input->post('bobotfsd'),
			'progresfsd' => $this->input->post('progresfsd'),
			'planstdatefsd' => $this->input->post('planstdatefsd'),
			'planendatefsd' => $this->input->post('planendatefsd'),
			'actualstdatefsd' => $this->input->post('actualstdatefsd'),
			'actualendatefsd' => $this->input->post('actualendatefsd'),
			'status' => 'Last Changed FSD',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
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
		$this->load->helper('date');
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
					// 'progres' => $this->input->post('progres'),
					'planstdate' => $this->input->post('planstdate'),
					'planendate' => $this->input->post('planendate'),
					'actualstdate' => $this->input->post('actualstdate'),
					'actualendate' => $this->input->post('actualendate'),
					'last_updated' => mdate('%Y-%m-%d %H:%i:%s', now()),
					

					
				];
				$data1 = array(
					'bobotdev' => $this->input->post('bobot'),
					'progresdev' => $this->input->post('progres'),
					'planstdatedev' => $this->input->post('planstdate'),
					'planendatedev' => $this->input->post('planendate'),
					'actualstdatedev' => $this->input->post('actualstdate'),
					'actualendatedev' => $this->input->post('actualendate'),
					'status' => 'Last Changed Development',
					'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
				);
				
				$this->Project_model->ubah($data1, $id);
				// var_dump($id);
				// die();
			
				$this->Development_model->insert($data);
				$this->session->set_flashdata('acc', 'Successfully Added Activity!');
			}else{
				$this->session->set_flashdata('err', 'Progress is not more than value!');
			}
			
			
		} else if ($bobot['bobot'] + $this->input->post('bobot') > 60) {
			$this->session->set_flashdata('err', 'Can not to insert activity. Value is not more than 60%!');
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
		$bobot = $this->Project_model->getBobot($id);
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
		$data['dev1'] = $this->Development_model->getById($id);
				$id = $this->input->post('project_id');
		$data = [
			'id_dev' => $this->input->post('id_dev'),
			'namakeg' => $this->input->post('namakeg'),
			'bobot' => $this->input->post('bobot'),
			'planstdate' => $this->input->post('planstdate'),
			'planendate' => $this->input->post('planendate'),
			'actualstdate' => $this->input->post('actualstdate'),
			'actualendate' => $this->input->post('actualendate'),
			'keterangan' => $this->input->post('keterangan'),
		];
		$data1 = [
			 'progresdev' => $this->input->post('bobot') + $bobot['progresdev'],
		];
		$this->Project_model->ubah($data1, $id);
		if($sub[0]->bobot+$this->input->post('bobot') <= $dev[0]->bobot){
			// print_r
			$this->Sub_model->insert($data);

			//get sum value sub kegiatan where id_dev = $this->input->post('id_dev'),
			$querySum = $this->Sub_model->getSumSubDev($this->input->post('id_dev')); 
			$totalProgress = $querySum[0]['Bobot'];
			// print_r($totalProgress); die();

			//update kolom progress di tabel activity where id_dev = $this->input->post('id_dev'),
			$this->Sub_model->updateProgress($this->input->post('id_dev'), $totalProgress);
			
			$this->session->set_flashdata('acc', 'Activity Successfully Added!');
		}else{
			$this->session->set_flashdata('err', 'Cannot insert activity!');
		}
		redirect('Project/detaildev/' . $id);
	}

	public function hapuskeg($id)
	{
		$idd = $this->Development_model->getidd($id);
		$this->Development_model->deletekeg($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Successfully Deleted!</div>');
		redirect('Project/detaildev/' . $idd->project_id);
	}

	public function ubahdev($id)
	{
		$this->load->helper('date');
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
		if ($this->input->post('progres') <= $this->input->post('bobot') ) {
		$data = [
			'bobot' => $this->input->post('bobotbrd'),
			//'progres' => $this->input->post('progresbrd'),
			'planstdate' => $this->input->post('planstdatebrd'),
			'planendate' => $this->input->post('planendatebrd'),
			'actualstdate' => $this->input->post('actualstdatebrd'),
			'actualendate' => $this->input->post('actualendatebrd'),
			
		];
		$data1 = array(
			'bobotdev' => $this->input->post('bobotbrd'),
			//'progresdev' => $this->input->post('progresbrd'),
			'planstdatedev' => $this->input->post('planstdatebrd'),
			'planendatedev' => $this->input->post('planendatebrd'),
			'actualstdatedev' => $this->input->post('actualstdatebrd'),
			'actualendatedev' => $this->input->post('actualendatebrd'),
			
			'status' => 'Last Changed Development',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
		);
		
		$this->Project_model->ubah($data1, $idd);
		$this->Development_model->ubah($data, $id);
		
	}else{
		$this->session->set_flashdata('err', 'Progress is not more than Value!');
	}
	redirect('Project/detaildev/' . $idd);
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
		$this->load->helper('date');
		$id = $this->input->post('id_project');
		$data = array(
			'bobotsit' => $this->input->post('bobotsit'),
			'progressit' => $this->input->post('progressit'),
			'planstdatesit' => $this->input->post('planstdatesit'),
			'planendatesit' => $this->input->post('planendatesit'),
			'actualstdatesit' => $this->input->post('actualstdatesit'),
			'actualendatesit' => $this->input->post('actualendatesit'),
			'status' => 'Last Changed SIT',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
		$this->load->helper('date');
		$id = $this->input->post('id_project');
		$data = array(
			'bobotuat' => $this->input->post('bobotuat'),
			'progresuat' => $this->input->post('progresuat'),
			'planstdateuat' => $this->input->post('planstdateuat'),
			'planendateuat' => $this->input->post('planendateuat'),
			'actualstdateuat' => $this->input->post('actualstdateuat'),
			'actualendateuat' => $this->input->post('actualendateuat'),
			'status' => 'Last Changed UAT',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
		$this->load->helper('date');
		$id = $this->input->post('id_project');
		$data = array(
			'bobotmigrasi' => $this->input->post('bobotmigrasi'),
			'progresmigrasi' => $this->input->post('progresmigrasi'),
			'planstdatemigrasi' => $this->input->post('planstdatemigrasi'),
			'planendatemigrasi' => $this->input->post('planendatemigrasi'),
			'actualstdatemigrasi' => $this->input->post('actualstdatemigrasi'),
			'actualendatemigrasi' => $this->input->post('actualendatemigrasi'),
			'status' => 'Last Changed Migrasi',
			'last_updated_time' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
		$this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Successfully Updated! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('project/detailmigrasi/' . $id);
	}
}
	