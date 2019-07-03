<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $e = $this->input->post('email');
    $p = $this->input->post('password');
    $this->load->model('model_login');
    $this->model_login->getlogin($e,$p);
	}

	public function login_checkout()
	{
    $e = $this->input->post('email');
    $p = $this->input->post('password');
    $this->load->model('model_login');
    $this->model_login->getloginmodal($e,$p);
	}
}
