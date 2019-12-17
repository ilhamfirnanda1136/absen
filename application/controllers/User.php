<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
	public function __construct() 
	{
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
	}
	public function index()
	{
		$data['row']=$this->user_m->get()->result();
		$this->load->view('header');
		$this->load->view('user/data',$data);
		$this->load->view('footer');
	}
	public function add()
	{
		$this->load->view('header');
		$this->load->view('user/form');
		$this->load->view('footer');
	}
	public function proses()
	{
		$post=$this->input->post(null,true);
		$config['upload_path'] 			='./image';
		$config['allowed_types']		='jpg|png|jpeg';
		$config['max_size']				= 2048;
		$config['file_name']			= 'foto-'.date('Y').substr(md5(rand()),0,10);
		$this->load->library('upload',$config);
		if (isset($post['simpan'])) {
			if (@$_FILES['foto']['name']!=null) {
				if ($this->upload->do_upload('foto')) {
					$post['foto']=$this->upload->data('file_name');
					$data=array(
						'username'=>$post['username'],
						'password'=>md5($post['password']),
						'nama'=>$post['nama'],
						'level'=>2,
						'foto'=>$post['foto'],
					);
					$this->user_m->add($data);
					$pesan='Anda telah berhasil menambah data pegawai serta foto';
				}
				else{
					$error=$this->upload->display_errors();
					$this->session->set_flashdata('error',$error);
				}
			}
			else {
				$data=array(
						'username'=>$post['username'],
						'password'=>md5($post['password']),
						'nama'=>$post['nama'],
						'level'=>2,
						'foto'=>null,
					);
					$this->user_m->add($data);
					$pesan='Anda telah berhasil menambah data pegawai';
			}
		}
		if ($this->db->affected_rows()>0) {
					$this->session->set_flashdata('success',$pesan);
				}
	  redirect('user');
	}
	public function hapus($id)
	{
		$query=$this->user_m->hapus($id);
		if ($this->db->affected_rows()>0) {
					$this->session->set_flashdata('success','anda telah berhasil menghapus pegawai');
				}
		redirect('user');
	}
	public function changepassword()
	{
		$this->load->view('header');
		$this->load->view('user/password');
		$this->load->view('footer');
	}
	public function prosespassword()
	{
		$post=$this->input->post(null,true);
		if (isset($post['ganti'])) {
		  $password=md5($post['password']);
		  $username=$this->fungsi->user_login()->username;
		  $cek=$this->user_m->login($post);
		  if ($cek->num_rows() > 0) {
		  	$query=$cek->row();
		  	$data=array('iduser'=>$query->iduser,'password'=>md5($post['newpassword']));
		  	$this->user_m->updatePassword($data);
		  	redirect('auth/logout');
		  }
		  else{
		  	$this->session->set_flashdata('error','mohon maaf password salah');
		  	redirect('user/changepassword');
		  }

		}
	}

}