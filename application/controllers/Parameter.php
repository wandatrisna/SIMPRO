<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parameter extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Jenisaplikasi_model');
        $this->load->model('JenisPMF_model');
        $this->load->model('Jenisproject_model');
        $this->load->model('Namadivisi_model');
        $this->load->model('User_model');
    }
 
	public function indexpmf()
    { 
        $data['pmf'] = $this->JenisPMF_model->get();
        $data['project'] = $this->Jenisproject_model->get();
        $data['user'] = $this->User_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('parameter/vw_param_pmf',$data);
        $this->load->view('layout/footer',$data);

        $this->form_validation->set_rules('jenispmf', 'jenispmf', 'required', [
            'required' => 'jenis pmf tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {

        } else {
            $data = [
				'jenispmf' => $this->input->post('jenispmf')
			   ];

			$this->JenisPMF_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Parameter/indexpmf');
    } 
}

    public function hapuspmf($id)
    {
        $this->JenisPMF_model->delete($id);
        redirect('Parameter/indexpmf');
    }

public function indexproj()
{ 
    $data['project'] = $this->Jenisproject_model->get();
    $data['user'] = $this->User_model->get();
    $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
    $this->load->view('layout/header',$data);
    $this->load->view('parameter/vw_param_proj',$data);
    $this->load->view('layout/footer',$data);

    $this->form_validation->set_rules('namajenisproject', 'namajenisproject', 'required', [
        'required' => 'jenis project tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {

    } else {
        $data = [
            'namajenisproject' => $this->input->post('namajenisproject')
           ];

        $this->Jenisproject_model->insert($data, $upload_image);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
        redirect('Parameter/indexproj');
    } 
    }

    public function hapusproject($id)
    {
        $this->Jenisproject_model->delete($id);
        redirect('Parameter/indexproj');
    }

    public function indexdiv()
    { 
        $data['divisi'] = $this->Namadivisi_model->get();
        $data['user'] = $this->User_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('parameter/vw_param_div',$data);
        $this->load->view('layout/footer',$data);

    $this->form_validation->set_rules('namadivisi', 'namadivisi', 'required', [
        'required' => 'jenis project tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {

    } else {
        $data = [
            'namadivisi' => $this->input->post('namadivisi')
           ];

        $this->Namadivisi_model->insert($data, $upload_image);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
        redirect('Parameter/indexdiv');
    } 
    }

    public function hapusdiv($id)
    {
        $this->Namadivisi_model->delete($id);
        redirect('Parameter/indexdiv');
    }

    public function indexapp()
    { 
        $data['aplikasi'] = $this->Jenisaplikasi_model->get();
        $data['project'] = $this->Jenisproject_model->get();
        $data['user'] = $this->User_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('parameter/vw_param_app',$data);
        $this->load->view('layout/footer',$data);

        $this->form_validation->set_rules('jenisaplikasi', 'jenisaplikasi', 'required', [
            'required' => 'jenis aplikasi tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {

        } else {
            $data = [
				'jenisaplikasi' => $this->input->post('jenisaplikasi')
			   ];

			$this->Jenisaplikasi_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Parameter/indexapp');
    } 
}

public function hapusaplikasi($id)
{
    $this->Jenisaplikasi_model->delete($id);
    redirect('Parameter/indexapp');
}
    }
?>