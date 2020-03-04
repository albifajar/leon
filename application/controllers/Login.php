<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Login berisi link page yang akan digunakan dalam pengelolaan login
	 */
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('login');
	}
	public function process()
	{
		$this->input->post());
	}
}
