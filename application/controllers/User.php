<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    { 
        $data['user'] = $this->User_model->get();
        $data['planning'] = $this->User_model->uplanning();
        $data['development'] = $this->User_model->udevelopment();
        $data['pinbag'] = $this->User_model->upinbag();
        $data['support'] = $this->User_model->usupport();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/vw_user',$data);
        $this->load->view('layout/footer',$data);
        
    }

    public function indexuserplanning()
    { 
        $data['planning'] = $this->User_model->planning();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/plan/vw_user_planning',$data);
        $this->load->view('layout/footer',$data);
    }

    public function indexuserdevelopment()
    { 
        $data['development'] = $this->User_model->development();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/dev/vw_user_development',$data);
        $this->load->view('layout/footer',$data);
    }

    public function indexuserpinbag()
    { 
        $data['pinbag'] = $this->User_model->pinbag();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/pin/vw_user_pinbag',$data);
        $this->load->view('layout/footer',$data);
    }

    public function indexusersupport()
    { 
        $data['support'] = $this->User_model->support();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/sup/vw_user_support',$data);
        $this->load->view('layout/footer',$data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            $this->form_validation->set_rules('NIK', 'NIK', 'required|is_unique[user.NIK]',[
                'required' => 'Required!',
                'is_unique' => 'This data is already registered!',      
            ]);
            
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Required'
            ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',
        [
        'matches' => 'Unmatched Password!',
        'min_length' => 'Password Too Short!',
        'required' => 'Required!'
        ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
        'matches' => 'Unmatched Password!',
        'required' => 'Required'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_tambah_user", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',

			   ];

			$this->User_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added successfully!</div>');
            redirect('User');
            }
    }

    public function editpin($id)
    {
        $data['user'] = $this->User_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array(); 
        $data['role'] = $this->User_model->role();
            
        $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'Required!',   
            ]);
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('role', 'role', 'required', [
                'required' => 'Required!'
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/pin/vw_ubah_pin", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role')
                    ];
   
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('User/indexuserpinbag');
        }
    }

    public function editplan($id)
    {
        $data['user'] = $this->User_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array(); 
        $data['role'] = $this->User_model->role();
            
        $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'Required!',   
            ]);
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('role', 'role', 'required', [
                'required' => 'Required!'
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/plan/vw_ubah_plan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role')
                    ];
   
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('User/indexuserplanning');
        }
    }

    public function editdev($id)
    {
        $data['user'] = $this->User_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array(); 
        $data['role'] = $this->User_model->role();
            
        $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'Required!',   
            ]);
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('role', 'role', 'required', [
                'required' => 'Required!'
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/dev/vw_ubah_dev", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role')
                    ];
   
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('User/indexuserdevelopment');
        }
    }

    public function editsup($id)
    {
        $data['user'] = $this->User_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array(); 
        $data['role'] = $this->User_model->role();
            
        $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'Required!',   
            ]);
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('role', 'role', 'required', [
                'required' => 'Required!'
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/sup/vw_ubah_sup", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role')
                    ];
   
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('User/indexusersupport');
        }
    }


    public function hapusplan($id)
    {
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('User/indexuserplanning');
    }

    public function hapusdev($id)
    {
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('User/indexuserdevelopment');
    }

    public function hapuspin($id)
    {
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('User/indexuserpinbag');
    }

    public function hapussup($id)
    {
        $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('User/indexusersupport');
    }
}
?>