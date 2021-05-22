<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{

		$data['pesan'] = $this->db->get('pesan',5);
		$data['recent'] = $this->templates->query("SELECT * FROM `pesan` ORDER BY `dikirim` DESC LIMIT 2");
		$data['recent_com'] = $this->templates->query("SELECT * FROM `pesan` ORDER BY `dikirim` DESC LIMIT 3");
		$data['project'] = $this->templates->query("SELECT count(id_project) as jumlah FROM `project`");
		$data['title'] = 'Dashboard';

		$this->load->view('template_admin/meta');
		$this->load->view('template_admin/sidebar',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('template_admin/footer');
	}
}
