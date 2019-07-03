<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('model_register'); //call model
	}

	public function index() {

		$this->form_validation->set_rules('nama', 'NAMA','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
      $isi['content'] = 'tampilan_register';
  		$this->load->view('headfoot',$isi);
		}else{

			$data['nama']   =    $this->input->post('nama');
			$data['email']  =    $this->input->post('email');
			$data['password'] =    md5($this->input->post('password'));

			$email = $this->input->post('email');
			$cek = $this->model_register->cekEmail($email);
			if(!empty($cek)){
				$message = "Email sudah terdaftar, silahkan masukkan email lainnya";
				$this->session->set_flashdata('info',$message);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->model_register->daftar($data);

				$pesan['message'] =    "Pendaftaran berhasil";

				redirect('home/login');
			}

		}
	}
}
