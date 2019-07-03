<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('users', $data);
	}

	function cekEmail($email){
		$this->db->where('email',$email);
		return $this->db->get('users')->result_array();
	}
}
