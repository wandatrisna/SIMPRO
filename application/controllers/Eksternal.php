<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eksternal extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Inhouse_model');
        $this->load->model('Eksternal_model');
        $this->load->model('Jeniseksternal_model');
        $this->load->model('Jenisdokumen_model');
        $this->load->model('Namadivisi_model');

    }

    public function index()
    { 
        $data['eksternal'] = $this->Eksternal_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/eksternal/vw_eksternal',$data);
        $this->load->view('layout/footer',$data);
    }

    public function subeksternal($nama_eks)
    { 
        $data['eksternal'] = $this->Eksternal_model->getByNama($nama_eks);
        //$data['nomor'] = $this->Eksternal_model->nomor();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/eksternal/vw_sub_eksternal',$data);
        $this->load->view('layout/footer',$data);
    }

    public function detaileksternal($id)
    { 
        $data['eksternal'] = $this->Eksternal_model->getById($id);
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/eksternal/vw_detail_eksternal',$data);
        $this->load->view('layout/footer',$data);
    }

    public function sup_indexeksternal()
    { 
        $data['eksternal'] = $this->Eksternal_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/eksternal/vw_support',$data);
        $this->load->view('layout/footer',$data);
    }

    public function tambaheksternal()
    {
            $data['eksternal'] = $this->Eksternal_model->get();
            $data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
            $data['jenispmf'] = $this->Jenisdokumen_model->get();
            $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        
            $this->form_validation->set_rules('nama_eks', 'nama_eks', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('jenisaplikasi', 'jenisaplikasi', 'required', [
                'required' => 'Datal tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('pmf_eks', 'pmf_eks', 'required', [
                'required' => 'Datal tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('versi_eks', 'versi_eks', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
                'required' => 'Datal tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('pic_plan_eks', 'pic_plan_eks', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('pmf_by_eks', 'pmf_by_eks', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('hapus_eks', 'hapus_eks', 'required', [
                'required' => 'Data tidak boleh kosong'
            ]);
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header',$data);
                $this->load->view('aplikasi/eksternal/vw_tambah_eksternal',$data);
                $this->load->view('layout/footer',$data);    
            } else {
                $pmf = $this->input->post('pmf_eks');
                $nomor_surat = $this->Eksternal_model->nomorsurat($pmf);
                    $data = [
                        'pmf_eks' => $this->input->post('pmf_eks'),
                        'nomor_eks' => $nomor_surat,
                        'nama_eks' => $this->input->post('nama_eks'),
                        'jenisaplikasi' => $this->input->post('jenisaplikasi'),
                        'versi_eks' => $this->input->post('versi_eks'),
                        'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                        'keterangan' => $this->input->post('keterangan'),
                        'pic_plan_eks' => $this->input->post('pic_plan_eks'),
                        'pmf_by_eks' => $this->input->post('pmf_by_eks'),	
                        'hapus_eks' => $this->input->post('hapus_eks'),		
                       ];
                $this->Eksternal_model->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
                redirect('Aplikasi/indexeksternal');
        }
    }

    public function editeksternal($id)
    {
        $data['eksternal'] = $this->Eksternal_model->getById($id);
        $data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

        $this->form_validation->set_rules('nomor_eks', 'nomor_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_eks', 'nama_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('jenisaplikasi', 'jenisaplikasi', 'required', [
            'required' => 'Datal tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pmf_eks', 'pmf_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('versi_eks', 'versi_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
		$this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
            'required' => 'Datal tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pic_plan_eks', 'pic_plan_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pmf_by_eks', 'pmf_by_eks', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("aplikasi/eksternal/vw_edit_eksternal", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'nomor_eks' => $this->input->post('nomor_eks'),
                'nama_eks' => $this->input->post('nama_eks'),
				'jenisaplikasi' => $this->input->post('jenisaplikasi'),
                'pmf_eks' => $this->input->post('pmf_eks'),
				'versi_eks' => $this->input->post('versi_eks'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                'keterangan' => $this->input->post('keterangan'),
				'pic_plan_eks' => $this->input->post('pic_plan_eks'),
				'pmf_by_eks' => $this->input->post('pmf_by_eks'),
			   ];
                    $upload_image = $_FILES['doc_form_pmf']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeneksternal/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_form_pmf')) {
                            $old_image = $data['eksternal']['doc_form_pmf'];
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('doc_form_pmf', $new_image);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        } 
                        
                        $upload_image = $_FILES['doc_library']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeneksternal/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_library')) {
                            $old_image = $data['eksternal']['doc_library'];
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('doc_library', $new_image);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }

                        $upload_image = $_FILES['doc_check_list']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeneksternal/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_check_list')) {
                            $old_image = $data['eksternal']['doc_check_list'];
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('doc_check_list', $new_image);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }
            $id_eks = $this->input->post('id_eks');
            $this->Eksternal_model->update(['id_eks' => $id_eks], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Aplikasi/detaileksternal/'.$id_eks);
        }
    
    }

    public function sup_editeksternal($id)
    {
        $data['eksternal'] = $this->Eksternal_model->getById($id);

        $data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

        $this->form_validation->set_rules('tgl_migrasi', 'tgl_migrasi', 'required', [
            'required' => 'Data tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("aplikasi/eksternal/vw_sup_edit", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'nomor_eks' => $this->input->post('nomor_eks'),
                'nama_eks' => $this->input->post('nama_eks'),
				'jenisaplikasi' => $this->input->post('jenisaplikasi'),
                'pmf_eks' => $this->input->post('pmf_eks'),
				'versi_eks' => $this->input->post('versi_eks'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                'tgl_migrasi' => $this->input->post('tgl_migrasi'),
                'keterangan' => $this->input->post('keterangan'),
				'pic_plan_eks' => $this->input->post('pic_plan_eks'),
				'pmf_by_eks' => $this->input->post('pmf_by_eks'),
			   ];
                            
            $id_eks = $this->input->post('id_eks');
            $this->Eksternal_model->update(['id_eks' => $id_eks], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Aplikasi/detaileksternal/'.$id_eks);
        }
    
    }

    public function hapuseksternal($id)
    {
        $this->Eksternal_model->delete($id);
        redirect('Aplikasi/indexeksternal');
    }

    public function downloadpmf1($id){
        $this->load->helper('download');
        $data = $this->db->get_where('eksternal',['doc_form_pmf'=>$id])->row();
		force_download('assets/dokumeneksternal/'.$data->doc_form_pmf,NULL);
    }
    public function downloadlib1($id){
        $this->load->helper('download');
        $data = $this->db->get_where('eksternal',['doc_library'=>$id])->row();
		force_download('assets/dokumeneksternal/'.$data->doc_library,NULL);
    }
    public function downloadcheck1($id){
        $this->load->helper('download');
        $data = $this->db->get_where('eksternal',['doc_check_list'=>$id])->row();
        force_download('assets/dokumeneksternal/'.$data->doc_library,NULL);
    }
}

    