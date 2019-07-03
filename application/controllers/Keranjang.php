<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_cart');
    $this->load->model('M_produk');
    $this->load->model('model_security');
  }

	public function index()
	{
    $isi['content'] = 'tampilan_keranjang';
    $isi['cart'] = $this->cart->contents();
		$this->load->view('headfoot',$isi);
	}

  public function beli(){
    $data = array(
      'id' => $this->input->post('id'),
      'name' => $this->input->post('nama'),
      'price' => $this->input->post('harga'),
      'gambar' => $this->input->post('gambar'),
      'qty' =>$this->input->post('qty')
      );
      $id = $this->input->post('id');
      $brng = $this->M_produk->cekStock($id);
      foreach ($brng as $br) {
        $stockTersedia = $br->stok;
        $stockPembeli = $this->input->post('qty');
        $sisaStock =  $stockTersedia - $stockPembeli;
      }
      if($stockTersedia == 0){
        $message = "Maaf, stok barang sedang kosong, silahkan hubungi fb.com/aditshinoda untuk menanyakan ketersediaan barang";

        $this->session->set_flashdata('info',$message);
        redirect($_SERVER['HTTP_REFERER']);
      }else if($sisaStock < 0){
        $message = "Jumlah barang yang diambil melebihi stock yang tersedia";
        $this->session->set_flashdata('info',$message);
        redirect($_SERVER['HTTP_REFERER']);

      }else {
        $this->cart->insert($data);
        redirect('keranjang');
      }

  }

  public function ubah(){
    $cart_info = $_POST['cart'] ;
      foreach( $cart_info as $id => $cart)
      {
        $rowid = $cart['rowid'];
        $price = $cart['price'];
        $gambar = $cart['gambar'];
        $amount = $price * $cart['qty'];
        $qty = $cart['qty'];
        $data = array('rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty);

        $nama = $cart['name'];
        $brng = $this->M_produk->cekStockbyNama($nama);
        foreach ($brng as $br) {
          $stockTersedia = $br->stok;
          $stockPembeli = $cart['qty'];
          $sisaStock =  $stockTersedia - $stockPembeli;
        }
        if($sisaStock <= 0){
          $message = "Terdapat stock barang yang diambil melebihi stock yang tersedia, silahkan cek kembali";
          $this->session->set_flashdata('info',$message);
          redirect($_SERVER['HTTP_REFERER']);
        }else {
          $this->cart->update($data);
        }


      }
      //baru

      redirect('keranjang');
  }

  public function hapus($rowid){
    if ($rowid =="semua"){
        $this->cart->destroy();
      }else{
        $data = array('rowid' => $rowid,
                  'qty' =>0);
        $this->cart->update($data);
      }
      redirect($this->agent->referrer());
  }

  public function bayar(){
    $email = $this->session->userdata('email');

      redirect('keranjang/checkout');
    }

    public function checkout()
  	{
      $isi['content'] = 'tampilan_checkout';
      $isi['cart'] = $this->cart->contents();
  		$this->load->view('headfoot',$isi);
  	}

    public function gobayar(){
      $cart = $this->cart->contents();
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $alamat = $this->input->post('alamat');
      $kota = $this->input->post('kota');
      $provinsi = $this->input->post('provinsi');
      $kodepos = $this->input->post('kodepos');
      $telepon = $this->input->post('telepon');
      $tanggal = date('Y-m-d H:i:s');
      foreach($cart as $item){
        $data = array(
          'nama' => $nama,
          'email'  => $email,
          'alamat' => $alamat,
          'kota' => $kota,
          'provinsi' => $provinsi,
          'kodepos' => $kodepos,
          'telepon' => $telepon,
          'tanggal' => $tanggal,
          'nama_barang' => $item['name'],
          'qty' => $item['qty'],
          'subtotal' => $item['subtotal']
        );

        $nama = $item['name'];
        $brng = $this->M_produk->cekStockbyNama($nama);
        foreach ($brng as $br) {
          $stockTersedia = $br->stok;
          $stockPembeli = $item['qty'];
          $sisaStock =  $stockTersedia - $stockPembeli;
        }
        $this->M_cart->updateStok($nama,$sisaStock);
        $this->M_cart->prosesbayar('checkout',$data);
      }

      $this->cart->destroy();
      redirect('home');
    }
}
