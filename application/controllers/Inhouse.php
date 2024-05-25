<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inhouse extends SDA_Controller
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
		$data['inhouse'] = $this->Inhouse_model->getdiv();
		$data['nomor'] = $this->Inhouse_model->nomor();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/inhouse/vw_inhouse', $data);
		$this->load->view('layout/footer', $data);
	}

	public function subinhouse($nama_in)
	{
		$data['inhouse'] = $this->Inhouse_model->getByNama($nama_in);
		$data['nomor'] = $this->Inhouse_model->nomor();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/inhouse/vw_sub_inhouse', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detailinhouse($id)
	{
		$data['inhouse'] = $this->Inhouse_model->getById($id);
		$data['nomor'] = $this->Inhouse_model->nomor();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/inhouse/vw_detail_inhouse', $data);
		$this->load->view('layout/footer', $data);
	}

	public function sup_indexinhouse()
	{
		$data['inhouse'] = $this->Inhouse_model->getdiv();
		$data['kode'] = $this->Inhouse_model->nomor();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('aplikasi/inhouse/vw_support', $data);
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
			$this->load->view('layout/header', $data);
			$this->load->view('aplikasi/inhouse/vw_tambah_inhouse', $data);
			$this->load->view('layout/footer', $data);
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
				'pic_migrasi_in' => $this->input->post('pic_migrasi_in'),
				'owner_in' => $this->input->post('owner_in'),
				'hapus_in' => $this->input->post('hapus_in'),
			];

			$this->Inhouse_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data successfully added!</div>');
			redirect('Inhouse');
		}
	}

	public function sendEmail($file_name_pmf, $file_name_lib, $file_name_check)
	{
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
		$mail->Password = '912hayutrisna__';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setFrom('noreply@testing.com', 'IT Planning - TSI BRKS'); // Sumber email
		$mail->addAddress('wanda.trisnahayu09@gmail.com'); // Masukkan alamat email dari variabel $email
		$mail->Subject = "MIGRATION EMAIL"; // Subjek Email
		$mail->addAttachment('./assets/dokumeninhouse/' . $file_name_pmf);
		$mail->addAttachment('./assets/dokumeninhouse/' . $file_name_lib);
		$mail->addAttachment('./assets/dokumeninhouse/' . $file_name_check);
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
        <br>Dokumen Pendukung Lainnya​ (silahkan cek aplikasi SIMPRO)
         
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
	private function _sendEmail($email, $file1, $file2, $file3)
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
		$picdev = $this->input->post('pic_dev_in');
		$nama = $this->input->post('nama_in');
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
        Dear Bagian IT Operation & Support,
        <br><br>
        Berikut ini kami sampaikan deskripsi kelen​gkapan dokumen migrasi untuk $nama
        <br>​Objek Migrasi​​ : 
        <br>Dokumen Migrasi (To Do List)
        <br>Dokumen PMF Migrasi​
        <br>Dokumen Ceklis Dokumen 
        <br>Dokumen Library​ 
        <br>Dokumen Pendukung Lainnya​ (silahkan cek aplikasi SIMPRO)
         
        <br>Mohon Bantuan Tim Support untuk dapat melakukan migrasi atas aplikasi tersebut.
        <br>Adapun PIC Development​ untuk Aplikasi ini dapat dikoordikasikan dengan Sdr.$picdev
         
        <br>Demikian kami sampaikan dimana selanjutnya Tim IT Operation & Support mohon bantuannya untuk dapat menginformasikan status migrasi/jadwal migrasi dengan me-reply email ini, atas perhatian dan kerjasamanya kami ucapkan terimakasih 

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

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}


	}
	public function editinhouse($id)
	{
		$data['inhouse'] = $this->Inhouse_model->getById($id);
		$data['kode'] = $this->Inhouse_model->nomor();
		$data['jenisaplikasi'] = $this->Jeniseksternal_model->get();
		$data['user1'] = $this->db->get_where('user', ['NIK' => $this->session->userdata('NIK')])->row_array();
		$this->load->helper('date');

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
				'update_date' => mdate('%Y-%m-%d %H:%i:%s', now()),
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
				// $config['max_size'] = '2048';
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
				//$config['max_size'] = '2048';
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
				//$config['max_size'] = '2048';
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
			$id_picmigrasi = $this->Inhouse_model->getById($id)['pic_migrasi_in'];
			$user_ = $this->db->get_where('user', ['id_user' => $id_picmigrasi])->row_array();
			$user_email = $user_['email'];

			$id_in = $this->input->post('id_in');
			if ($this->Inhouse_model->update(['id_in' => $id_in], $data)) {
				$this->_sendEmail($user_email, $new_image1, $new_image2, $new_image3);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
				redirect('Inhouse/detailinhouse/' . $id_in);

			} else {
				// Jika pengiriman email gagal, tambahkan pesan kesalahan ke dalam flashdata
				//$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to send email. Please check your email configuration.</div>');
				// Jika ingin menampilkan pesan kesalahan spesifik, Anda bisa menggabungkan ErrorInfo ke dalam pesan
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to send email. Please check your email configuration. Error: </div>');
				redirect('Inhouse/detailinhouse/' . $id_in);

			}
			;

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
		$this->form_validation->set_rules('note_in', 'note_in', 'required', [
			'required' => 'Required!'
		]);
		$this->form_validation->set_rules('comment_in', 'comment_in', 'required', [
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
				'note_in' => $this->input->post('note_in'),
				'comment_in' => $this->input->post('comment_in'),
			];
			$id_in = $this->input->post('id_in');
			$this->Inhouse_model->update(['id_in' => $id_in], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully updated!</div>');
			redirect('Inhouse/detailinhouse/' . $id_in);
		}
	}

	public function hapusinhouse($id)
	{
		$this->Inhouse_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
		redirect('Inhouse');
	}

	public function downloadpmf($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('inhouse', ['doc_form_pmf' => $id])->row();
		force_download('assets/dokumeninhouse/' . $data->doc_form_pmf, NULL);
	}
	public function downloadlib($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('inhouse', ['doc_library' => $id])->row();
		force_download('assets/dokumeninhouse/' . $data->doc_library, NULL);
	}
	public function downloadcheck($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('inhouse', ['doc_check_list' => $id])->row();
		force_download('assets/dokumeninhouse/' . $data->doc_check_list, NULL);
	}
	public function downloadlain($id)
	{
		$this->load->helper('download');
		$data = $this->db->get_where('inhouse', ['doc_lain' => $id])->row();
		force_download('assets/dokumenlain/' . $data->doc_lain, NULL);
	}

}

