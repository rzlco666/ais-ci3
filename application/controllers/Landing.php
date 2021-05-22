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

	function proses()
	{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['subject'] = $this->input->post('subject');
			$data['comments'] = $this->input->post('comments');
			$this->db->insert('pesan',$data);
			$this->session->set_flashdata('success_kirim','Pesan berhasil dikirim!');
			redirect('landing#contact');
	}

	function delete($id_pesan)
	{
		$this->db->delete('pesan', array("id_pesan" => $id_pesan));
		$this->session->set_flashdata('success_hapus_pesan','Pesan Berhasil Dihapus');
		redirect('pesan');
	}
}
