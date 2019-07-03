<?php
class My404 extends CI_Controller
{
 public function __construct()
 {
    parent::__construct();
 }

 public function index()
 {
    $this->output->set_status_header('404');
    $isi['cart'] = $this->cart->contents();
    $isi['content'] = 'tampilan_404';
    $this->load->view('headfoot',$isi);//loading in custom error view
 }
}
