<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {
  public function getlogin($e,$p){
    $pwd = md5($p);
    $this->db->where('email',$e);
    $this->db->where('password',$pwd);
    $query = $this->db->get('users');
    if($query->num_rows()>0){
      foreach ($query->result() as $row) {
        $sess = array(
        'nama' => $row->nama,
        'email' => $row->email,
      'level' => $row->level);
        $this->session->set_userdata($sess);
        redirect('home');
      }
    }else{
      $this->session->set_flashdata('info','Email atau Password salah!');
      redirect('home/login');
    }
  }

  public function getloginmodal($e,$p){
    $pwd = md5($p);
    $this->db->where('email',$e);
    $this->db->where('password',$pwd);
    $query = $this->db->get('users');
    if($query->num_rows()>0){
      foreach ($query->result() as $row) {
        $sess = array(
        'nama' => $row->nama,
        'email' => $row->email,
      'level' => $row->level);
        $this->session->set_userdata($sess);
        redirect('keranjang/checkout');
      }
    }
  }

}
