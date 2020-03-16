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
	public function index($msg = false)
	{

		$goods = $this->goods->get();
		$this->load->view('auctioneer/dashboard', array('data' => $goods));
	}
	public function goods($data=false){
		if($data == false){
			redirect('auctioneer');
			return;
		}else{
		$this->load->view('auctioneer/goods');	
		}
	}
	public function goods_delete($data=false){
		if($data == false){
			redirect('auctioneer');
		}
		if($this->goods->delete($data)){

			$this->session->set_userdata(array('massage' => 'Data berhasil dihapus'));
			redirect('auctioneer');
		}
	}
	public function goods_create(){
		//convert prince ke integer
		 intval(implode('',explode(',', $this->input->post('prince'))));

		if($this->goods->validation_create()){
			if($this->goods->insert($this->input->post())){
				redirect('auctioneer');
			}else{
				$this->load->view('auctioneer/goods_create');
			}
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
