<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function create()
	{
		$data['title'] = 'Create Project';

		$this->load->view('template_admin/meta');
		$this->load->view('template_admin/sidebar',$data);
		$this->load->view('project/create');
		$this->load->view('template_admin/footer');
	}

	function proses()
	{
		$config['upload_path']          = './public/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('thumbnail'))
		{
				$this->session->set_flashdata('error_project','Proses Tambah Project Gagal');
				redirect('upload');
				unset($_SESSION['error_project']);
		}
		else
		{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);
			$data['nama_project'] = $this->input->post('nama_project');
			$data['deskripsi_project'] = $this->input->post('deskripsi_project');
			$data['url'] = $this->input->post('url');
			$data['owner'] = $this->input->post('owner');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['email'] = $this->input->post('email');
			$data['alamat'] = $this->input->post('alamat');
			$data['thumbnail'] = $file_encode;
			$data['nama_thumbnail'] =  $this->upload->data('file_type');
			$this->db->insert('project',$data);
			unlink($image_data['full_path']);
			$this->session->set_flashdata('success_project','Proses Tambah Project Berhasil');
			redirect('upload');
			unset($_SESSION['success_project']);
		}
	}

	function edit($id_project)
	{
		$data['project'] = $this->auth->getById($id_project);
		
		$this->load->view('template_admin/meta');
		$this->load->view('template_admin/sidebar');
		$this->load->view('project/edit',$data);
		$this->load->view('template_admin/footer');
	}

	function update()
	{
		$config['upload_path']          = './public/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('thumbnail'))
		{
			$id = $this->input->post('id_project');
			$data['nama_project'] = $this->input->post('nama_project');
			$data['deskripsi_project'] = $this->input->post('deskripsi_project');
			$data['url'] = $this->input->post('url');
			$data['owner'] = $this->input->post('owner');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['email'] = $this->input->post('email');
			$data['alamat'] = $this->input->post('alamat');
			$this->db->update('project', $data, array('id_project' => $id));
			$this->session->set_flashdata('success_ubah_project','Proses Ubah Project Berhasil');
			redirect('upload');
			unset($_SESSION['success_ubah_project']);
		}
		else
		{
			$id = $this->input->post('id_project');
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode=base64_encode($imgdata);
			$data['nama_project'] = $this->input->post('nama_project');
			$data['deskripsi_project'] = $this->input->post('deskripsi_project');
			$data['url'] = $this->input->post('url');
			$data['owner'] = $this->input->post('owner');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['email'] = $this->input->post('email');
			$data['alamat'] = $this->input->post('alamat');
			$data['thumbnail'] = $file_encode;
			$data['nama_thumbnail'] =  $this->upload->data('file_type');
			$this->db->update('project', $data, array('id_project' => $id));
			unlink($image_data['full_path']);
			$this->session->set_flashdata('success_ubah_project','Proses Ubah Project Berhasil');
			redirect('upload');
			unset($_SESSION['success_ubah_project']);
		}
	}

	function delete($id_project)
	{
		$this->db->delete('project', array("id_project" => $id_project));
		$this->session->set_flashdata('success_hapus_project','Proses Hapus Project Berhasil');
		redirect('upload');
		unset($_SESSION['success_hapus_project']);
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('project');
		$data['title'] = 'List Project';

		$this->load->view('template_admin/meta');
		$this->load->view('template_admin/sidebar',$data);
		$this->load->view('project/index',$data);
		$this->load->view('template_admin/footer');
	}
}
