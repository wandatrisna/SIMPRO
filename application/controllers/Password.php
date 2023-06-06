<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $data['user'] = $this->userrole->getBy();
        $NIK = $this->input->get('NIK');
        $this->form_validation->set_rules('password1', 'New Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/password");
            $this->load->view("layout/auth_footer");
        } else {
            $password1 = $this->input->post('password1');
            $password2 = $this->input->post('password2');
            if (!$password1 == $password2) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unmatched Password!</div>');
                redirect('auth/password');
            } else {
                $data = [
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                ];
            }
            $NIK = $this->input->post('NIK');
            $this->userrole->update(['NIK' => $NIK], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully Changed Password!</div>');
            redirect('Auth');
        }
    }

}