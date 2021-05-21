<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$data['berkas'] = $this->db->get('project');

		$this->load->view('template/meta');
		$this->load->view('template/header');
		$this->load->view('landing/index',$data);
		$this->load->view('template/footer');
	}
}
