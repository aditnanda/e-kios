<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function get(){
    return $this->db->get('barang');
  }

  public function cart($data){
    return $this->db->insert('order',$data);
  }

  public function prosesbayar($table,$data){
    $this->db->insert($table,$data);
  }

  public function updateStok($nama,$sisaStock){
    $this->db->set('stok',$sisaStock);
    $this->db->where('nama',$nama);
    $this->db->update('barang');
  }

}
