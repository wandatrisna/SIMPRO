<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Project_model');
		$this->load->model('User_model');
		$this->load->model('Jenisproject_model');
		$this->load->model('Jenisaplikasi_model');
		$this->load->model('Development_model');
		$this->load->model('Sub_model');
        $this->load->model('Inhouse_model');
        $this->load->model('Eksternal_model');
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

    public function dash1()
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


        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('auth/dashboard',$data);
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
         $this->User_model->insert($data);
         redirect('User');
	}
	
    public function tambahdev()
    {
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            $this->form_validation->set_rules('NIK', 'NIK', 'required|is_unique[user.NIK]',[
                'required' => 'NIK tidak boleh kosong',
                'is_unique' => 'NIK ini sudah terdaftar!',      
            ]);
            
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Nama user tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jk', 'jk', 'required', [
                'required' => 'Jenis Kelamin user tidak boleh kosong'
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
            $this->load->view("user/dev/vw_tambah_development", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',

			   ];

			$this->User_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data user Berhasil Ditambah!</div>');
            redirect('User/indexuserdevelopment');
            }
           
    }

	public function tambahplan()
    {

        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            $this->form_validation->set_rules('NIK', 'NIK', 'required|is_unique[user.NIK]',[
                'required' => 'NIK tidak boleh kosong',
                'is_unique' => 'NIK ini sudah terdaftar!',      
            ]);
            
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Nama user tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jk', 'jk', 'required', [
                'required' => 'Jenis Kelamin user tidak boleh kosong'
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
            $this->load->view("user/plan/vw_tambah_planning", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',

			   ];

			$this->User_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data user Berhasil Ditambah!</div>');
            redirect('User/indexuserplanning');
            }
           
    }

    public function tambahsup()
    {

        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            $this->form_validation->set_rules('NIK', 'NIK', 'required|is_unique[user.NIK]',[
                'required' => 'NIK tidak boleh kosong',
                'is_unique' => 'NIK ini sudah terdaftar!',      
            ]);
            
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Nama user tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jk', 'jk', 'required', [
                'required' => 'Jenis Kelamin user tidak boleh kosong'
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
            $this->load->view("user/sup/vw_tambah_support", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',

			   ];

			$this->User_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data user Berhasil Ditambah!</div>');
            redirect('User/indexusersupport');
            }
           
    }

    public function tambahpin()
    {
        $data['user'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            $this->form_validation->set_rules('NIK', 'NIK', 'required|is_unique[user.NIK]',[
                'required' => 'NIK tidak boleh kosong',
                'is_unique' => 'NIK ini sudah terdaftar!',      
            ]);
            
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Nama user tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jk', 'jk', 'required', [
                'required' => 'Jenis Kelamin user tidak boleh kosong'
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
            $this->load->view("user/pin/vw_tambah_pinbag", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',

			   ];

			$this->User_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data user Berhasil Ditambah!</div>');
            redirect('User/indexuserpinbag');
            }
           
    }

    public function edit($id)
    {
        $data['user'] = $this->User_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array(); 
        $data['userrole'] = $this->User_model->getRole('user', ['NIK' => $this->session->userdata('NIK')]);
        $data['role'] = $this->User_model->role();
            
        $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'NIK tidak boleh kosong',   
            ]);
            $this->form_validation->set_rules('nama', 'nama', 'required', [
                'required' => 'Nama User tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jk', 'jk', 'required', [
                'required' => 'Jenis Kelamin User tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('role', 'role', 'required', [
                'required' => 'Role User tidak boleh kosong'
            ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_ubah_user", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'role' => $this->input->post('role')
                    ];
                    $upload_image = $_FILES['gambar']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
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
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }     
            $id_user = $this->input->post('id_user');
            $this->User_model->update(['id_user' => $id_user], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil DiUbah!</div>');
            redirect('User');
        }
    
    }


    public function hapusplan($id)
    {
        $this->User_model->delete($id);
        redirect('User/indexuserplanning');
    }

    public function hapusdev($id)
    {
        $this->User_model->delete($id);
        redirect('User/indexuserdevelopment');
    }

    public function hapuspin($id)
    {
        $this->User_model->delete($id);
        redirect('User/indexuserpinbag');
    }

    public function hapussup($id)
    {
        $this->User_model->delete($id);
        redirect('User/indexusersupport');
    }

    public function indexsearch()
	{
		$keyword = $this->input->get('keyword');
		$data = $this->User_model->get($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
        $data['user'] = $this->User_model->get($keyword);
        $data['planning'] = $this->User_model->uplanning();
        $data['development'] = $this->User_model->udevelopment();
        $data['pinbag'] = $this->User_model->upinbag();
        $data['support'] = $this->User_model->usupport();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('user/vw_user',$data);
        $this->load->view('layout/footer',$data);
	}
}
?>