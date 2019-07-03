<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('model_security'); //call model
    $this->load->model('M_produk');
	}

	public function index()
	{
		$this->model_security->getsecurity();
		redirect('barang/data');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('home/login');
	}

  public function data(){
    $this->model_security->getsecurity();
    $isi['cart'] = $this->cart->contents();
    $isi['barang'] = $this->M_produk->data();
		$isi['content'] = 'barang/data';
		$this->load->view('headfoot',$isi);
  }

  public function input(){
    $this->model_security->getsecurity();
    $isi['cart'] = $this->cart->contents();
		$isi['content'] = 'barang/input';
		$this->load->view('headfoot',$isi);
  }

  public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/barang/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000, 'max_width' => 1000,
        'max_height' => 1000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('barang/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['gambar' => $file['file_name'],
           'nama' => set_value('nama'),
           'harga' => set_value('harga'),
           'stok' => set_value('stok'),
           'deskripsi' => set_value('deskripsi'),
           'kategori' => set_value('kategori')
         ];
          $this->M_produk->input($data); //memasukan data ke database
          redirect('barang/data'); //mengalihkan halaman

      }
  }

  public function ubah($id){
    $this->model_security->getsecurity();
    $isi['cart'] = $this->cart->contents();
    $isi['barang'] = $this->M_produk->getid($id);
    $isi['content'] = 'barang/update';
		$this->load->view('headfoot',$isi);
  }

  public function proses_ubah($id){
    $gambar = $this->M_produk->gambar($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/barang/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 1000, 'max_width' => 1000,
          'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('barang/update', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gambar' => $file['file_name']];
            unlink('assets/barang/'.$gambar->gambar); //menghapus gambar yang lama
        }
      }
      $data['nama']      = set_value('nama');
      $data['harga']   = set_value('harga');
      $data['stok']   = set_value('stok');
      $data['deskripsi']   = set_value('deskripsi');
      $data['kategori']   = set_value('kategori');
      $this->M_produk->ubah($id, $data); //memasukan data ke database
      redirect('barang/data'); //mengalihkan halaman
  }

  public function hapus($id){
    $this->model_security->getsecurity();
    $gambar = $this->M_produk->gambar($id);
    unlink('assets/barang/'.$gambar->gambar);
    $this->M_produk->hapus($id);
    redirect('barang/data'); //mengalihkan halaman
  }

  public function detail(){
    $key = str_replace('_', ' ',$this->uri->segment(3));

    $brng = $this->M_produk->detail($key);
    if(empty($brng)){
      redirect('home');
    }else{
      $isi['barang'] = $brng;
      $isi['content'] = 'barang/detail';
      $isi['cart'] = $this->cart->contents();
  		$this->load->view('headfoot',$isi);
    }

  }
}
