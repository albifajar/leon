<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_m extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function create($data){
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

		var_dump($data);
	}

}
