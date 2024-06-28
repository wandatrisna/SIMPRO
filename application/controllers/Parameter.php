<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parameter extends SDA_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jeniseksternal_model');
		$this->load->model('Jenisaplikasi_model');
		$this->load->model('Jenisdokumen_model');
		$this->load->model('Jenisproject_model');
		$this->load->model('Namadivisi_model');
		$this->load->model('User_model');
		$this->requiredLogin();
		preventAccessPengguna(
			array(
				SU
			)
		);
	}

	public function indexdok()
	{
		$data['dokumen'] = $this->Jenisdokumen_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->form_validation->set_rules('jenisdokumen', 'jenisdokumen', 'required', [
			'required' => 'Parameter harus diisi!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('parameter/vw_param_dok', $data);
			$this->load->view('layout/footer', $data);
	
		} else {
			$data = [
				'jenisdokumen' => $this->input->post('jenisdokumen')
			];

			$this->Jenisdokumen_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parameter baru berhasil ditambahkan!</div>');
			redirect('Parameter/indexdok');
		}
	}

	public function hapusdok($id)
	{
		try {
			// Coba hapus data
			$this->Jenisdokumen_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} catch (Exception $e) {
			// Tangani kesalahan foreign key constraint
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus data karena terkait dengan data lain!</div>');
		}
		
		redirect('Parameter/indexdok');
	}

	public function indexproj()
	{
		$data['project'] = $this->Jenisproject_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->form_validation->set_rules('namajenisproject', 'namajenisproject', 'required', [
			'required' => 'Parameter harus diisi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('parameter/vw_param_proj', $data);
			$this->load->view('layout/footer', $data);
	
		} else {
			$data = [
				'namajenisproject' => $this->input->post('namajenisproject')
			];

			$this->Jenisproject_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parameter baru berhasil ditambahkan!</div>');
			redirect('Parameter/indexproj');
		}
	}

	public function hapusproject($id)
	{
		try {
			// Coba hapus data
			$this->Jenisproject_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} catch (Exception $e) {
			// Tangani kesalahan foreign key constraint
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus data karena terkait dengan data lain!</div>');
		}
		
		redirect('Parameter/indexproj');
	}

	public function indexdiv()
	{
		$data['divisi'] = $this->Namadivisi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->form_validation->set_rules('namadivisi', 'namadivisi', 'required', [
			'required' => 'Parameter harus diisi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('parameter/vw_param_div', $data);
			$this->load->view('layout/footer', $data);
	
		} else {
			$data = [
				'namadivisi' => $this->input->post('namadivisi')
			];

			$this->Namadivisi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parameter baru berhasil ditambahkan!</div>');
			redirect('Parameter/indexdiv');
		}
	}

	public function hapusdiv($id)
	{
		try {
			// Coba hapus data
			$this->Namadivisi_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} catch (Exception $e) {
			// Tangani kesalahan foreign key constraint
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus data karena terkait dengan data lain!</div>');
		}
		
		redirect('Parameter/indexdiv');
	}

	public function indexeks()
	{
		$data['eks'] = $this->Jeniseksternal_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->form_validation->set_rules('jenis_eks', 'jenis_eks', 'required', [
			'required' => 'Parameter harus diisi!'
		]);

		
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('parameter/vw_param_eks', $data);
			$this->load->view('layout/footer', $data);
	
		} else {
			$data = [
				'jenis_eks' => $this->input->post('jenis_eks')
			];

			$this->Jeniseksternal_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parameter baru berhasil ditambahkan!</div>');
			redirect('Parameter/indexeks');
		}
	}

	public function hapuseksternal($id)
	{
		try {
			// Coba hapus data
			$this->Jeniseksternal_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		} catch (Exception $e) {
			// Tangani kesalahan foreign key constraint
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus data karena terkait dengan data lain!</div>');
		}
		
		redirect('Parameter/indexeks');
	}

	public function indexapp()
{
    $data['app'] = $this->Jenisaplikasi_model->get();
    $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

    // Form validation rules
    $this->form_validation->set_rules('namajenisaplikasi', 'Jenis Aplikasi', 'required', [
        'required' => 'Parameter harus diisi'
    ]);

    if ($this->form_validation->run() == false) {
        // Load views with errors
        $this->load->view('layout/header', $data);
        $this->load->view('parameter/vw_param_app', $data);
        $this->load->view('layout/footer', $data);
    } else {
        // Jika validasi berhasil
        $data_insert = [
            'namajenisaplikasi' => $this->input->post('namajenisaplikasi')
        ];

        // Insert data to database
        $this->Jenisaplikasi_model->insert($data_insert);

        // Set flashdata message
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parameter baru berhasil ditambahkan!</div>');
        
        // Redirect to the same page
        redirect('Parameter/indexapp');
    }
}


public function hapusapp($id)
{
    try {
        // Coba hapus data
        $this->Jenisaplikasi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
    } catch (Exception $e) {
        // Tangani kesalahan foreign key constraint
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus data karena terkait dengan data lain!</div>');
    }
    redirect('Parameter/indexapp');
}




}
?>