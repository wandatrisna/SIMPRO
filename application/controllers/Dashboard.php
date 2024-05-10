<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Project_model');
		$this->load->model('User_model');
		$this->load->model('Jenisproject_model');
		$this->load->model('Jeniseksternal_model');
		$this->load->model('Development_model');
		$this->load->model('Sub_model');
        $this->load->model('Inhouse_model');
        $this->load->model('Eksternal_model');
    }
    
    public function index()
    {
        
        $data['user'] = $this->User_model->get();
        $data['count'] = $this->User_model->count_user();
        $data['planning'] = $this->User_model->uplanning();
        $data['development'] = $this->User_model->udevelopment();
        $data['pinbag'] = $this->User_model->upinbag();
        $data['support'] = $this->User_model->usupport();
        $data['count1'] = $this->Inhouse_model->getCount();
        $data['count2'] = $this->Eksternal_model->getCount();
        $data['progress'] = $this->Project_model->progresproject();
        $data['done'] = $this->Project_model->doneproject();
        $data['allpro'] = $this->Project_model->all();
        $data['stat'] = $this->Project_model->status();
        $data['user1'] = $this->User_model->dashboard();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('auth/dashboard',$data);
        $this->load->view('layout/footer',$data);
    }
}