<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }
 
	public function index()
	{ 
		$this->load->view('layout/auth_header');
		$this->load->view('auth/awal');
		$this->load->view('layout/auth_footer');
	}


}