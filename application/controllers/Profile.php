<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        
    }
 
	public function index()
    { 
        $data['user'] = $this->User_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('profil/vw_profile',$data);
        $this->load->view('layout/footer',$data);
    }

    function upload()
    {
         $data = [
             'NIK' => $this->input->post('NIK'),
             'nama' => $this->input->post('nama'),
             'jk' => $this->input->post('jk'),
			 'gambar' => $this->input->post('gambar'),
			 'role' => $this->input->post('role'),
			 'password' => $this->input->post('password'),

			];
         $this->User_model->update($data);
         redirect('Profile');
	}

    public function edit($id)
    {
        $data['user'] = $this->User_model->getById($id);
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

            $this->form_validation->set_rules('gambar', 'gambar', 'dimensions:ratio=1/1', [
                'dimensions' => 'Gambar harus persegi!'
            ]);
            
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',
            [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek',
            'required' => 'Password harus diisi'
            ]
            );
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password Tidak Sama',
            'required' => 'Password harus diisi'
            ]);
    

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("profil/vw_edit_profile", $data);
            $this->load->view("layout/footer",$data);
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role')
                    ];
                    $upload_image = $_FILES['gambar']['name'];
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/images/profile/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('gambar')) {
                            $old_image = $data['user']['gambar'];
                            if ($old_image != 'default.png') {
                                unlink(FCPATH . 'assets/images/profile/' . $old_image);
                            }
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil perbarui foto!</div>');
                        } else {
                            echo $this->upload->display_errors();
                            }
                        } 
                             
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            redirect('Profile');
        }
    
    }


}