<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function view_data(){
    $where = date('m');
    $this->db->where('MONTH(tanggal)',$where);
    return $this->db->get('checkout')->result_array();
  }

  public function bayar($data){
    return $this->db->insert('order',$data);
  }

  public function prosesbayar($table,$data){
    $this->db->insert($table,$data);
  }
}
