<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Login berisi link page yang akan digunakan dalam pengelolaan login
	 */
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('account_m', 'account');
	}
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('login');
	}
	public function process()
	{
		$this->load->library('session');
		if($level = $this->account->check_login($this->input->post())){

		}else{
			redirect('login');
		}

	}
}
