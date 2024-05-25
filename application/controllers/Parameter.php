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
		$this->load->view('layout/header', $data);
		$this->load->view('parameter/vw_param_dok', $data);
		$this->load->view('layout/footer', $data);

		$this->form_validation->set_rules('jenisdokumen', 'jenisdokumen', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {

		} else {
			$data = [
				'jenisdokumen' => $this->input->post('jenisdokumen')
			];

			$this->Jenisdokumen_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
			redirect('Parameter/indexdok');
		}
	}

	public function hapusdok($id)
	{
		$this->Jenisdokumen_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Parameter/indexdok');
	}

	public function indexproj()
	{
		$data['project'] = $this->Jenisproject_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('parameter/vw_param_proj', $data);
		$this->load->view('layout/footer', $data);

		$this->form_validation->set_rules('namajenisproject', 'namajenisproject', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {

		} else {
			$data = [
				'namajenisproject' => $this->input->post('namajenisproject')
			];

			$this->Jenisproject_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
			redirect('Parameter/indexproj');
		}
	}

	public function hapusproject($id)
	{
		$this->Jenisproject_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Parameter/indexproj');
	}

	public function indexdiv()
	{
		$data['divisi'] = $this->Namadivisi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('parameter/vw_param_div', $data);
		$this->load->view('layout/footer', $data);

		$this->form_validation->set_rules('namadivisi', 'namadivisi', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {

		} else {
			$data = [
				'namadivisi' => $this->input->post('namadivisi')
			];

			$this->Namadivisi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
			redirect('Parameter/indexdiv');
		}
	}

	public function hapusdiv($id)
	{
		$this->Namadivisi_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Parameter/indexdiv');
	}

	public function indexeks()
	{
		$data['eks'] = $this->Jeniseksternal_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('parameter/vw_param_eks', $data);
		$this->load->view('layout/footer', $data);

		$this->form_validation->set_rules('jenis_eks', 'jenis_eks', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {

		} else {
			$data = [
				'jenis_eks' => $this->input->post('jenis_eks')
			];

			$this->Jeniseksternal_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
			redirect('Parameter/indexeks');
		}
	}

	public function hapuseksternal($id)
	{
		$this->Jeniseksternal_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Parameter/indexeks');
	}

	public function indexapp()
	{
		$data['app'] = $this->Jenisaplikasi_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('parameter/vw_param_app', $data);
		$this->load->view('layout/footer', $data);

		$this->form_validation->set_rules('namajenisaplikasi', 'namajenisaplikasi', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {

		} else {
			$data = [
				'namajenisaplikasi' => $this->input->post('namajenisaplikasi')
			];

			$this->Jenisaplikasi_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
			redirect('Parameter/indexapp');
		}
	}

	public function hapusapp($id)
	{
		$this->Jenisaplikasi_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Parameter/indexapp');
	}
}
?>
