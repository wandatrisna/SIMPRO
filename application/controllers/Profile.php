<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends SDA_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->requiredLogin();
		preventAccessPengguna(
			array(
				SU,
				DP,
				PL,
				PB,
				IS
			)
		);
	}

	public function index()
	{
		//
		$data['user'] = $this->User_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_profile', $data);
		$this->load->view('layout/footer', $data);
	}

	function upload()
	{
		//$this->check_session();
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

    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
        'matches' => 'Password Tidak Sama','min_length' => 'Password Terlalu Pendek','required' => 'Password harus diisi'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
        'matches' => 'Password Tidak Sama','required' => 'Password harus diisi'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_edit_profile", $data);
        $this->load->view("layout/footer", $data);
    } else {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'nama' => $this->input->post('nama'),
            'role' => $this->input->post('role')
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/profile/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                // Check the image dimensions
                $upload_data = $this->upload->data();
                $image_path = $upload_data['full_path'];
                list($width, $height) = getimagesize($image_path);
                if ($width != $height) {
                    // Delete the uploaded file if dimensions do not match
                    unlink($image_path);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar harus memiliki dimensi 1:1 (persegi).</div>');
                    redirect('Profile/edit/'.$id);
                } else {
                    $old_image = $data['user']['gambar'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }
                    $new_image = $upload_data['file_name'];
                    $this->db->set('gambar', $new_image);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto Profil Berhasil Diubah!</div>');
                }
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