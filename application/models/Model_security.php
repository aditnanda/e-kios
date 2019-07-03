<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_model {
  public function getsecurity(){
    $level = $this->session->userdata('level');
    if($level == 'user' || $level == ''){
      $this->session->sess_destroy();
      redirect('home/login');
    }
  }

  public function getuser(){
    $email = $this->session->userdata('email');
    if(empty($email)){
      $this->session->sess_destroy();
      redirect('home/login');
    }
  }
}
