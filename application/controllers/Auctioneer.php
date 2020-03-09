<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auctioneer extends CI_Controller {

	/**
	 * page untuk petugas
	 */
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('goods_m', 'goods');
		$this->on_session();
		$this->load->helper('url');
	}
	private function on_session(){
		if($this->session->level !== 'petugas'){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('auctioneer/dashboard');
	}
	public function goods(){
		$this->load->view('auctioneer/goods');
	}
	public function goods_create(){
		//convert prince ke integer
		 intval(implode('',explode(',', $this->input->post('prince'))));
		if($this->goods->validation_create()){
			$this->goods->insert();
		}else{
		$this->load->view('auctioneer/goods_create');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		if($this->session->level){
			redirect('auctioneer');
		}else{
			redirect('login');
		}
	}
}
