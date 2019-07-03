<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('model_security'); //call model
    $this->load->model('M_produk');
	}

	public function elektronik()
	{
    $key = str_replace('_', ' ',$this->uri->segment(2));
    $brng = $this->M_produk->kategori($key);
    if(empty($brng)){
      redirect('home');
    }else{
      $isi['barang'] = $brng;
      $isi['cart'] = $this->cart->contents();
      $isi['content'] = 'tampilan_kategori';
  		$this->load->view('headfoot',$isi);
    }
	}

  public function fashion()
	{
    $key = str_replace('_', ' ',$this->uri->segment(2));
    $brng = $this->M_produk->kategori($key);
    if(empty($brng)){
      redirect('home');
    }else{
      $isi['barang'] = $brng;
      $isi['cart'] = $this->cart->contents();
      $isi['content'] = 'tampilan_kategori';
  		$this->load->view('headfoot',$isi);
    }
	}

  public function lainnya()
	{
    $key = str_replace('nya', '-lain',$this->uri->segment(2));
    $brng = $this->M_produk->kategori($key);
    if(empty($brng)){
      redirect('home');
    }else{
      $isi['barang'] = $brng;
      $isi['cart'] = $this->cart->contents();
      $isi['content'] = 'tampilan_kategori';
  		$this->load->view('headfoot',$isi);
    }
	}
}
