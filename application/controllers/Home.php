<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_security');
		$this->load->model('laporan');
	}

	public function index()
	{
		$isi['content'] = 'tampilan_home';
		$isi['data'] = $this->db->get('barang');
		$isi['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$isi);
	}

	public function login(){
		$isi['content'] = 'tampilan_login';
		$isi['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$isi);
	}
	public function register(){
		$isi['content'] = 'tampilan_register';
		$isi['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$isi);
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->cart->destroy();
		redirect('home');
	}

	public function hapus($rowid){
    if ($rowid =="semua"){
        $this->cart->destroy();
      }else{
        $data = array('rowid' => $rowid,
                  'qty' =>0);
        $this->cart->update($data);
      }
  }

	public function profil(){
		$isi['content'] = 'tampilan_profil';
		$isi['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$isi);
	}

	public function laporan(){
		$this->model_security->getsecurity();
		$data['data'] = $this->laporan->view_data();
		$data['content'] = 'tampilan_laporan';
		$data['nama'] = $this->session->userdata('nama');
		$data['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$data);
	}

	public function laporan_pdf(){
		$this->model_security->getsecurity();
    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-e-kios.pdf";
		$data['nama'] = "";
		$data['data'] = $this->laporan->view_data();
		$data['cart'] = $this->cart->contents();
    $this->pdf->load_view('tampilan_laporan',$data);
	}


}
