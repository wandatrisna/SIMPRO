<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eksternal extends SDA_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Inhouse_model');
		$this->load->model('Eksternal_model');
		$this->load->model('Jeniseksternal_model');
		$this->load->model('Jenisdokumen_model');
		$this->load->model('Namadivisi_model');
		$this->requiredLogin();
		preventAccessPengguna(
			array(
				DP,
				PL,
				PB,
				IS
			)
		);
	}


	public function index()
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getdiv();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/eksternal/vw_eksternal', $data);
		$this->load->view('layout/footer', $data);
	}

	public function subeksternal($nama_eks)
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getByNama($nama_eks);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/eksternal/vw_sub_eksternal', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detaileksternal($id)
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getById($id);
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/eksternal/vw_detail_eksternal', $data);
		$this->load->view('layout/footer', $data);
	}

	public function sup_indexeksternal()
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getdiv();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/eksternal/vw_support', $data);
		$this->load->view('layout/footer', $data);
	}

	public function get_user()
	{
		// Ambil nilai role yang dipilih dari permintaan AJAX
		$selectedRole = $this->input->post('role'); // sesuaikan dengan nama input yang digunakan di view

		// Lakukan query untuk mengambil data user dari database berdasarkan role
		// Anda harus mengganti ini dengan logika sesuai dengan struktur tabel dan basis data Anda
		$user = $this->db->select('id_user, nama')->where('role', $selectedRole)->get('user')->result_array();

		// Kembalikan data user sebagai respon dalam format JSON
		echo json_encode($user);
	}

	public function tambaheksternal()
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->get();
		$data['jenis_eks'] = $this->Jeniseksternal_model->get();
		$data['jenisdok'] = $this->Jenisdokumen_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->form_validation->set_rules('nama_eks', 'nama_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('jenis_eks', 'jenis_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('dokumen_eks', 'dokumen_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('versi_eks', 'versi_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('pic_plan_eks', 'pic_plan_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('pmf_by_eks', 'pmf_by_eks', 'required', [
			'required' => 'Required!'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('aplikasi/eksternal/vw_tambah_eksternal', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$jenis_eks = $this->input->post('jenis_eks');
			$nomor_surat = $this->Eksternal_model->nomorsurat($jenis_eks);
			$data = [
				'jenis_eks' => $this->input->post('jenis_eks'),
				'nomor_eks' => $nomor_surat,
				'nama_eks' => $this->input->post('nama_eks'),
				'dokumen_eks' => $this->input->post('dokumen_eks'),
				'versi_eks' => $this->input->post('versi_eks'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),
				'keterangan' => $this->input->post('keterangan'),
				'pic_plan_eks' => $this->input->post('pic_plan_eks'),
				'pic_migrasi_eks' => $this->input->post('pic_migrasi_eks'),
				'pmf_by_eks' => $this->input->post('pmf_by_eks'),
				'hapus_eks' => $this->input->post('hapus_eks'),
			];
			$this->Eksternal_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data successfully added!</div>');
			redirect('Eksternal');
		}
	}

	public function sendEmail($file_name_pmf, $file_name_lib, $file_name_check)
	{
		//print_r($file_name_pmf); die(); 
		$this->load->library('email');
		$nama = $this->input->post('nama_eks');
		$picdev = $this->input->post('pic_plan_eks');

		$this->load->library('PHPMailer_load'); //Load Library PHPMailer
		$mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
		$mail->isSMTP();  // Mengirim menggunakan protokol SMTP
		$mail->Host = 'smtp.gmail.com'; // Host dari server SMTP
		$mail->SMTPAuth = true; // Autentikasi SMTP
		$mail->Username = 'wanda20ti@mahasiswa.pcr.ac.id';
		$mail->Password = '912hayutrisna__';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setFrom('noreply@testing.com', 'Planning - Wanda Trisnahayu'); // Sumber email
		$mail->addAddress('itosbrks@gmail.com'); // Masukkan alamat email dari variabel $email
		$mail->Subject = "MIGRATION EMAIL"; // Subjek Email
		$mail->addAttachment('./assets/dokumeneksternal/' . $file_name_pmf);
		$mail->addAttachment('./assets/dokumeneksternal/' . $file_name_lib);
		$mail->addAttachment('./assets/dokumeneksternal/' . $file_name_check);
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
        <br>Dokumen Pendukung Lainnya​ (Silahkan cek aplikasi SIMPRO)
         
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

	public function editeksternal($id)
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getById($id);
		$data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->load->helper('date');

		$this->form_validation->set_rules('nomor_eks', 'nomor_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('nama_eks', 'nama_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('jenis_eks', 'jenis_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('dokumen_eks', 'dokumen_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('versi_eks', 'versi_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('tgl_penyerahan_pmf', 'tgl_penyerahan_pmf', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('pic_plan_eks', 'pic_plan_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('pic_migrasi_eks', 'pic_migrasi_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('pmf_by_eks', 'pmf_by_eks', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("aplikasi/eksternal/vw_edit_eksternal", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nomor_eks' => $this->input->post('nomor_eks'),
				'nama_eks' => $this->input->post('nama_eks'),
				'jenis_eks' => $this->input->post('jenis_eks'),
				'dokumen_eks' => $this->input->post('dokumen_eks'),
				'versi_eks' => $this->input->post('versi_eks'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),
				'tgl_migrasi' => $this->input->post('tgl_migrasi'),
				'keterangan' => $this->input->post('keterangan'),
				'pic_plan_eks' => $this->input->post('pic_plan_eks'),
				'pic_migrasi_eks' => $this->input->post('pic_migrasi_eks'),
				'pmf_by_eks' => $this->input->post('pmf_by_eks'),
				'update_date' => mdate('%Y-%m-%d %H:%i:%s', now()),
				'hapus_eks' => $this->input->post('hapus_eks'),
				'note_eks' => $this->input->post('note_eks'),
				'comment_eks' => $this->input->post('comment_eks'),
			];
			$upload_image = $_FILES['doc_form_pmf']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/dokumeneksternal/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('doc_form_pmf')) {
					$old_image = $data['eksternal']['doc_form_pmf'];
					$new_image1 = $this->upload->data('file_name');
					$this->db->set('doc_form_pmf', $new_image1);
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
					$new_image2 = $this->upload->data('file_name');
					$this->db->set('doc_library', $new_image2);
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
					$new_image3 = $this->upload->data('file_name');
					$this->db->set('doc_check_list', $new_image3);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$upload_image = $_FILES['doc_lain']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|zip|rar';
				$config['max_size'] = '20000';
				$config['upload_path'] = './assets/dokumenlain/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('doc_lain')) {
					$old_image = $data['inhouse']['doc_lain'];
					$new_image = $this->upload->data('file_name');
					$this->db->set('doc_lain', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id_picmigrasi = $this->Eksternal_model->getById($id)['pic_migrasi_eks'];
			$user_ = $this->db->get_where('user', ['id_user' => $id_picmigrasi])->row_array();
			$user_email = $user_['email'];

			$id_eks = $this->input->post('id_eks');
			if ($this->Eksternal_model->update(['id_eks' => $id_eks], $data)) {
				$this->_sendEmail($user_email,  $new_image, $new_image1, $new_image2, $new_image3);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah data berhasil!</div>');
				redirect('Eksternal/detaileksternal/' . $id_eks);

			} else {
				// Jika pengiriman email gagal, tambahkan pesan kesalahan ke dalam flashdata
				//$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to send email. Please check your email configuration.</div>');
				// Jika ingin menampilkan pesan kesalahan spesifik, Anda bisa menggabungkan ErrorInfo ke dalam pesan
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to send email. Please check your email configuration. Error: </div>');
				redirect('Eksternal/detaileksternal/' . $id_eks);
			}
			;

		}
	}

	private function _sendEmail($email, $file1, $file2, $file3, $file4)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.googlemail.com',
			'smtp_port' => 587,
			'smtp_user' => 'itosbrks@gmail.com',
			'smtp_pass' => 'mbzv azxy dwtg qxtg',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'wordwrap' => TRUE,
			'smtp_crypto' => 'tls',
			'newline' => "\r\n"

		];
		$picplan = $this->input->post('pic_plan_eks');
		$nama = $this->input->post('nama_eks');
		$picmig = $this->input->post('pic_migrasi_eks');
		$data['email'] = $this->input->post('email', true);
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->SMTPDebug = 2; // Aktifkan output debug
		$this->email->SMTPAuth = true;
		$this->email->from('itosbrks@gmail.com', 'BRKS riau');
		$this->email->to($email);
		// var_dump($password);
		// die;
		$this->email->subject('MIGRATION EMAIL');
		$this->email->message("Assalamualaikum Warahmatullahi Wabarokatuh
        <br>
        Dear PIC Migrasi, Sdr.$picmig
        <br><br>
        Berikut ini kami sampaikan deskripsi kelen​gkapan dokumen migrasi untuk $nama
        <br>​Objek Migrasi​​ : 
        <br>Dokumen Migrasi (To Do List)
        <br>Dokumen PMF Migrasi​
        <br>Dokumen Ceklis Dokumen 
        <br>Dokumen Library​ 
        <br>Dokumen Pendukung Lainnya​ (silahkan cek aplikasi SIMPRO)
         
        <br>Mohon Bantuan Anda untuk dapat melakukan migrasi atas aplikasi tersebut.
        <br>Adapun PIC Planning untuk Aplikasi ini dapat dikoordikasikan dengan Sdr.$picplan
         
        <br>Demikian kami sampaikan dimana selanjutnya mohon bantuannya untuk dapat menginformasikan status migrasi/jadwal migrasi dengan me-reply email ini, atas perhatian dan kerjasamanya kami ucapkan terimakasih 

        <br><br>Wassalamualaikum Warahmatullahi Wabarokatuh.
         ​
         <br><br><br>Regards,​
         
         <br><br>IT Planning & Assurance
         <br>Divisi Teknologi & Sistem Informasi
         <br>Bank Riau Kepri​​ Syariah
            ");
			if ($file1) {
				$this->email->attach('./assets/dokumeninhouse/' . $file1);
			}
			if ($file2) {
				$this->email->attach('./assets/dokumeninhouse/' . $file2);
			}
			if ($file3) {
				$this->email->attach('./assets/dokumeninhouse/' . $file3);
			}
			if ($file4) {
				$this->email->attach('./assets/dokumeninhouse/' . $file4);
			}
	
			if ($this->email->send()) {
				return true;
			} else {
				echo $this->email->print_debugger();
				die;
			}

	}

	public function sup_editeksternal($id)
	{
		//$this->check_session();
		$data['eksternal'] = $this->Eksternal_model->getById($id);
		$data['jenis_eks'] = $this->Jeniseksternal_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();

		$this->form_validation->set_rules('tgl_migrasi', 'tgl_migrasi', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('note_eks', 'note_eks', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('comment_eks', 'comment_eks', 'required', [
			'required' => 'Required!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("aplikasi/eksternal/vw_sup_edit", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nomor_eks' => $this->input->post('nomor_eks'),
				'nama_eks' => $this->input->post('nama_eks'),
				'jenis_eks' => $this->input->post('jenis_eks'),
				'dokumen_eks' => $this->input->post('dokumen_eks'),
				'versi_eks' => $this->input->post('versi_eks'),
				'tgl_penyerahan_pmf' => $this->input->post('tgl_penyerahan_pmf'),
				'tgl_migrasi' => $this->input->post('tgl_migrasi'),
				'keterangan' => $this->input->post('keterangan'),
				'pic_plan_eks' => $this->input->post('pic_plan_eks'),
				'pmf_by_eks' => $this->input->post('pmf_by_eks'),
				'note_eks' => $this->input->post('note_eks'),
				'comment_eks' => $this->input->post('comment_eks'),
			];

			$id_eks = $this->input->post('id_eks');
			$this->Eksternal_model->update(['id_eks' => $id_eks], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah data berhasil!</div>');
			redirect('Eksternal/detaileksternal/' . $id_eks);
		}
	}

	public function hapuseksternal($id)
	{
		$this->Eksternal_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('Eksternal');
	}

	public function downloadpmf1($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('eksternal', ['doc_form_pmf' => $id])->row();
		force_download('assets/dokumeneksternal/' . $data->doc_form_pmf, NULL);
	}
	public function downloadlib1($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('eksternal', ['doc_library' => $id])->row();
		force_download('assets/dokumeneksternal/' . $data->doc_library, NULL);
	}
	public function downloadcheck1($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('eksternal', ['doc_check_list' => $id])->row();
		force_download('assets/dokumeneksternal/' . $data->doc_library, NULL);
	}
	public function downloadlain($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('eksternal', ['doc_lain' => $id])->row();
		force_download('assets/dokumenlain/' . $data->doc_lain, NULL);
	}

}