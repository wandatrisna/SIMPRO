<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inhouse extends CI_Controller 
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
        $data['inhouse'] = $this->Inhouse_model->get();
        $data['nomor'] = $this->Inhouse_model->nomor();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/inhouse/vw_inhouse',$data);
        $this->load->view('layout/footer',$data);
    }

    public function subinhouse($nama_in)
    { 
        $data['inhouse'] = $this->Inhouse_model->getByNama($nama_in);
        $data['nomor'] = $this->Inhouse_model->nomor();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/inhouse/vw_sub_inhouse',$data);
        $this->load->view('layout/footer',$data);
    }

    public function detailinhouse($id)
    { 
        $data['inhouse'] = $this->Inhouse_model->getById($id);
        $data['nomor'] = $this->Inhouse_model->nomor();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/inhouse/vw_detail_inhouse',$data);
        $this->load->view('layout/footer',$data);
    }

    public function sup_indexinhouse()
    { 
        $data['inhouse'] = $this->Inhouse_model->get();
        $data['kode'] = $this->Inhouse_model->nomor();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
        $this->load->view('layout/header',$data);
        $this->load->view('aplikasi/inhouse/vw_support',$data);
        $this->load->view('layout/footer',$data);
    }

    public function sendEmail($file_name_pmf, $file_name_lib, $file_name_check) {
        //print_r($file_name_pmf); die(); 
        $this->load->library('email');
        $nama = $this->input->post('nama_in');
        $picdev = $this->input->post('pic_dev_in');

        $this->load->library('PHPMailer_load'); //Load Library PHPMailer
        $mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
        $mail->isSMTP();  // Mengirim menggunakan protokol SMTP
        $mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
        $mail->SMTPAuth = true; // Autentikasi SMTP
        $mail->Username = 'wanda20ti@mahasiswa.pcr.ac.id';
        $mail->Password = 'hayutrisna912';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('noreply@testing.com', 'Planning - Wanda Trisnahayu'); // Sumber email
        $mail->addAddress('wanda.trisnahayu09@gmail.com'); // Masukkan alamat email dari variabel $email
        $mail->Subject = "MIGRATION EMAIL TESTING"; // Subjek Email
        //$mail->addAttachment('E:\COOLYEAH\smt6\LOGBOOK INSTANSI\Logbook 20maret-5mei _ wanda.pdf');
        $mail->addAttachment('./assets/dokumeninhouse/'.$file_name_pmf);
        $mail->addAttachment('./assets/dokumeninhouse/'.$file_name_lib);
        $mail->addAttachment('./assets/dokumeninhouse/'.$file_name_check);
        //$mail->addAttachment('./assets/dokumenlain/'.$lain);
        $mail->msgHtml("
        Assalamualaikum Warahmatullahi Wabarokatu
        <br>
        Dear Bagian IT Operation & Support,
        <br><br>
        Berikut ini kami sampaikan deskripsi kelen​gkapan dokumen migrasi untuk $nama
        <br>​Objek Migrasi​​ : 
        <br>Dokumen Migrasi (To Do List)
        <br>Dokumen PMF Migrasi​
        <br>Dokumen Ceklis Dokumen 
        <br>Dokumen Library​ 
        <br>Dokumen Pendukung Lainnya​ (Dokumen pendukung dapat diakses melalui link berikut [link menyusul saat aplikasi LIVE])
         
        <br>Mohon Bantuan Tim Support untuk dapat melakukan migrasi atas aplikasi tersebut.
        <br>Adapun PIC Development​ untuk Aplikasi ini dapat dikoordikasikan dengan Sdr.$picdev
         
        <br>Demikian kami sampaikan dimana selanjutnya Tim IT Operation & Support mohon bantuannya untuk dapat menginformasikan status migrasi/jadwal migrasi dengan me-reply email ini, atas perhatian dan kerjasamanya kami ucapkan terimakasih 

        <br><br>Wassalamualaikum Warahmatullahi Wabarokatuh.
         ​
         <br><br><br>Regards,​
         
         <br><br>IT Planning & Assurance
         <br>Divisi Teknologi & Sistem Informasi
         <br>Bank Riau Kepri​​ Syariah
            "); // Isi email dengan format HTML
            
        if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    //echo "Message sent!";
                } // Kirim email dengan cek kondisi
    }

    public function tambahinhouse()
    { 
        $data['inhouse'] = $this->Inhouse_model->get();
        $data['nomor'] = $this->Inhouse_model->nomor();
        $data['jenisdok'] = $this->Jenisdokumen_model->get();
        $data['namadivisi'] = $this->Namadivisi_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
            
            $this->form_validation->set_rules('nomor_in', 'nomor_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('jenis_dokumen', 'jenis_dokumen', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('nama_in', 'nama_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('versi_in', 'versi_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('keterangan_in', 'keterangan_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('pic_plan_in', 'pic_plan_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('pic_dev_in', 'pic_dev_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('owner_in', 'owner_in', 'required', [
                'required' => 'Required!'
            ]);
            $this->form_validation->set_rules('hapus_in', 'hapus_in', 'required', [
                'required' => 'Required!'
            ]);
            if ($this->form_validation->run() == false) {
                $this->load->view('layout/header',$data);
                $this->load->view('aplikasi/inhouse/vw_tambah_inhouse',$data);
                $this->load->view('layout/footer',$data);    
            } else {
                $data = [
                    'nomor_in' => $this->input->post('nomor_in'),
                    'jenis_dokumen' => $this->input->post('jenis_dokumen'),
                    'nama_in' => $this->input->post('nama_in'),
                    'versi_in' => $this->input->post('versi_in'),
                    'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                    'keterangan_in' => $this->input->post('keterangan_in'),
                    'pic_plan_in' => $this->input->post('pic_plan_in'),
                    'pic_dev_in' => $this->input->post('pic_dev_in'),
                    'owner_in' => $this->input->post('owner_in'),
                    'hapus_in' => $this->input->post('hapus_in'),			
                   ];
    
                $this->Inhouse_model->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data successfully added!</div>');
                redirect('Inhouse');
        }  
    }

    public function editinhouse($id)
    {
        $data['inhouse'] = $this->Inhouse_model->getById($id);
        $data['kode'] = $this->Inhouse_model->nomor();
        $data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

        $this->form_validation->set_rules('nomor_in', 'nomor_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('jenis_dokumen', 'jenis_dokumen', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('nama_in', 'nama_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('versi_in', 'versi_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('keterangan_in', 'keterangan_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('pic_plan_in', 'pic_plan_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('pic_dev_in', 'pic_dev_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('owner_in', 'owner_in', 'required', [
            'required' => 'Required!'
        ]);
        $this->form_validation->set_rules('hapus_in', 'hapus_in', 'required', [
            'required' => 'Required!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("aplikasi/inhouse/vw_edit_inhouse", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'nomor_in' => $this->input->post('nomor_in'),
				'jenis_dokumen' => $this->input->post('jenis_dokumen'),
				'nama_in' => $this->input->post('nama_in'),
				'versi_in' => $this->input->post('versi_in'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                'keterangan_in' => $this->input->post('keterangan_in'),
				'pic_plan_in' => $this->input->post('pic_plan_in'),
				'pic_dev_in' => $this->input->post('pic_dev_in'),
				'owner_in' => $this->input->post('owner_in'),	
                'hapus_in' => $this->input->post('hapus_in'),				
			   ];
                    $upload_image = $_FILES['doc_form_pmf']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|zip|rar';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeninhouse/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_form_pmf')) {
                            // $old_image = $data['inhouse']['doc_form_pmf'];
                        $new_image1 = $this->upload->data('file_name');
                        $this->db->set('doc_form_pmf', $new_image1);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        } 
                        $upload_image = $_FILES['doc_library']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|zip|rar';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeninhouse/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_library')) {
                            // $old_image = $data['inhouse']['doc_library'];
                        $new_image2 = $this->upload->data('file_name');
                        $this->db->set('doc_library', $new_image2);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }
                        $upload_image = $_FILES['doc_check_list']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|zip|rar';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeninhouse/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_check_list')) {
                            // $old_image = $data['inhouse']['doc_check_list'];
                        $new_image3 = $this->upload->data('file_name');
                        $this->db->set('doc_check_list', $new_image3);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }
                        $upload_image = $_FILES['doc_lain']['name'];       
                        if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|zip|rar';
                        $config['max_size'] = '2048';
                        $config['upload_path'] = './assets/dokumeninhouse/';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('doc_lain')) {
                            // $old_image = $data['inhouse']['doc_lain'];
                        $new_image4 = $this->upload->data('file_name');
                        $this->db->set('doc_lain', $new_image4);
                        } else {
                            echo $this->upload->display_errors();
                            }
                        }

            $id_in = $this->input->post('id_in');
            $this->Inhouse_model->update(['id_in' => $id_in], $data);
            $this->sendEmail($new_image1, $new_image2,$new_image3);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('Inhouse/detailinhouse/'.$id_in);
        }
    }

    public function sup_editinhouse($id)
    {
        $data['inhouse1'] = $this->Inhouse_model->getById($id);
        $data['kode'] = $this->Inhouse_model->nomor();
        $data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
        $data['namadivisi'] = $this->Namadivisi_model->get();
        $data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

        $this->form_validation->set_rules('tgl_migrasi_prod', 'tgl_migrasi_prod', 'required', [
            'required' => 'Required!'
        ]);

        $this->form_validation->set_rules('pic_migrasi_in', 'pic_migrasi_in', 'required', [
            'required' => 'Required!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("aplikasi/inhouse/vw_sup_edit", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
				'nomor_in' => $this->input->post('nomor_in'),
				'jenis_dokumen' => $this->input->post('jenis_dokumen'),
				'nama_in' => $this->input->post('nama_in'),
				'versi_in' => $this->input->post('versi_in'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),	
                'tgl_migrasi_prod' => $this->input->post('tgl_migrasi_prod'),
                'keterangan_in' => $this->input->post('keterangan_in'),
				'pic_plan_in' => $this->input->post('pic_plan_in'),
				'pic_dev_in' => $this->input->post('pic_dev_in'),
                'pic_migrasi_in' => $this->input->post('pic_migrasi_in'),
				'owner_in' => $this->input->post('owner_in'),				
			   ];
            $id_in = $this->input->post('id_in');
            $this->Inhouse_model->update(['id_in' => $id_in], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
            redirect('Inhouse/detailinhouse/'.$id_in);
        }
    }

    public function hapusinhouse($id)
    {
        $this->Inhouse_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('Inhouse');
    }

    public function downloadpmf($id){
        $this->load->helper('download');
        $data = $this->db->get_where('inhouse',['doc_form_pmf'=>$id])->row();
		force_download('assets/dokumeninhouse/'.$data->doc_form_pmf,NULL);
    }
    public function downloadlib($id){
        $this->load->helper('download');
        $data = $this->db->get_where('inhouse',['doc_library'=>$id])->row();
		force_download('assets/dokumeninhouse/'.$data->doc_library,NULL);
    }
    public function downloadcheck($id){
        $this->load->helper('download');
        $data = $this->db->get_where('inhouse',['doc_check_list'=>$id])->row();
        force_download('assets/dokumeninhouse/'.$data->doc_check_list,NULL);
    }
    public function downloadlain($id){
        $this->load->helper('download');
        $data = $this->db->get_where('inhouse',['doc_lain'=>$id])->row();
        force_download('assets/dokumenlain/'.$data->doc_lain,NULL);
    }

}

    