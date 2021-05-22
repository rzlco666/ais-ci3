<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{
		$data['pesan'] = $this->db->get('pesan');
		$data['title'] = 'Kotak Masuk';

		$this->load->view('template_admin/meta');
		$this->load->view('template_admin/sidebar',$data);
		$this->load->view('pesan/index',$data);
		$this->load->view('template_admin/footer');
	}
}
