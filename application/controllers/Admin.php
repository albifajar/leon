<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	* page untuk admin
	**/
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->on_session();
		$this->load->helper('url');
		$this->load->model('account_m', 'account');
	}
	private function on_session(){
		if($this->session->level !== 'admin'){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function auctioneer(){
		$this->load->view('admin/auctioneer');
	}

	public function username_check($str){
        if ($this->account->username_checkout($str) == false){
            $this->form_validation->set_message('username_check', '{field} tidak tersedia"');
            return FALSE;
        }else{
            return TRUE;
        }
    }
	public function registration_auctioneer(){

		$this->load->helper('form');
		if ($this->account->validation_registration() == FALSE) {
			$this->load->view('admin/registation_auctioneer');
		}else{
			if($this->account->create_auctioneer($this->input->post())){
				redirect('admin/auctioneer');
			}else{
				redirect('admin/registation_auctioneer');
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		if($this->session->level){
			redirect('admin');
		}else{
			redirect('login');
		}
	}
}
