<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('template/meta');
		$this->load->view('template/header');
		$this->load->view('landing/index');
		$this->load->view('template/footer');
	}
}
