<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SDA_Controller extends CI_Controller
{

	/**
	 * variable untuk keperluan SEO
	 */
	protected $siteName = 'Sistem Informasi dan Manajemen Project';
	protected $metaAuthor = 'simpro.com';
	protected $metaAppId = '';
	protected $metaImage = array();
	protected $metaUrl = array();
	protected $metaTitle = array(
		'default' => 'Sistem Informasi dan Manajemen Project',
	);
	protected $metaDescription = array(
		'default' => 'Sistem Informasi dan Manajemen Project',
	);
	protected $metKeyword = array(
		'default' => 'sistem informasi, bank, brk,  simpro',
	);


	/**
	 * @var array data2 yang akan di tampilkan di setiap halaman
	 */
	protected $recentBerita = array();


	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");

		parent::__construct();
		define('SITE_NAME', $this->siteName);
		define('SITE_LOGO', base_url('assets/app/media/img/logos/logo.png'));
		define('PATH_FOTO', ('uploads/foto/'));
		define('PATH_MEDIA', ('uploads/media/'));
		define('IMG', PATH_MEDIA . ('img/'));
		define('IMG_S', PATH_MEDIA . ('small/'));
		define('IMG_M', PATH_MEDIA . ('medium/'));
		define('IMG_L', PATH_MEDIA . ('large/'));
		define('FILE', PATH_MEDIA . ('files/'));
		define('SU', 'Superuser');
		define('DP', 'Development');
		define('PL', 'Planning');
		define('PB', 'Pinbag');
		define('IS', 'IT Support');



		define('is_login', $this->session->userdata('id_user'));

		$this->load->helper('commonutility');
		$this->load->helper('grantaccess');
		// $this->load->helper('sending');
		$this->load->helper('template');

		// $this->load->library('datatables');
		// $this->load->library('pagination');

		$this->load->model('User_model');


		define('time_now', date('Y-m-d H:i:s'));
		define('day_now', date('Y-m-d'));

		define('login_type', $this->session->userdata('role'));
	}

	function requiredLogin()
	{
		if (!$this->session->userdata('id_user'))
			redirect('Auth');
	}





	function adddLog($action = '', $desc = '', $pengguna_id = NULL)
	{
		$_CLIENT = getClientIpAndMac();
		$this->Md_log->addData([
			'owner' => 'pengguna',
			'owner_id' => (!$pengguna_id ? penggunaId() : $pengguna_id),
			'tgl' => date('Y-m-d'),
			'jenis_aksi' => $action,
			'keterangan' => $desc,
			'jam' => date('H:i:s'),
			'ip' => $_CLIENT['IP'],
			'mac_address' => $_CLIENT['MAC'],
			'status' => 1,
		]);
	}

	function addLogResp($action = '', $desc = '', $responden_id = NULL)
	{
		$_CLIENT = getClientIpAndMac();
		$this->Md_log->addData([
			'owner' => 'responden',
			'owner_id' => respondenId(),
			'tgl' => date('Y-m-d'),
			'jenis_aksi' => $action,
			'keterangan' => $desc,
			'jam' => date('H:i:s'),
			'ip' => $_CLIENT['IP'],
			'mac_address' => $_CLIENT['MAC'],
			'status' => 1,
		]);
	}
}
