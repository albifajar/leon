<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	* page untuk admin
	**/
	public function __construct(){
		parent:: __construct();
		//session
		$this->load->library('session');
		$this->on_session();
		//url
		$this->load->helper('url');
		//model account
		$this->load->model('account_m', 'account');
	}
	private function on_session(){
		//cek session
		if($this->session->level !== 'admin'){
			redirect('login');
		}
	}
	public function index()
	{
		//main of admin area
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
	}

	public function auctioneer(){
		//main of auctioneer page
		$this->load->view('admin/auctioneer', array('data'=>$this->account->get_accounts('petugas')));
	}
	public function registration_auctioneer(){
		//create new account dari petugas / auctioneer
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

	public function username_check($str){
		//costum form_validation
		//cek username
        if ($this->account->username_checkout($str) == false){
            $this->form_validation->set_message('username_check', '{field} tidak tersedia"');
            return FALSE;
        }else{
            return TRUE;
        }
    }
	public function auctioneer_delete($id){
		//delete acutioneer/petugas
		if($this->account->del_account($id)){
			redirect('admin/auctioneer');
		}else{
			
		}
	}
	public function logout(){
		//keluar dari halaman admin
		$this->session->sess_destroy();
		if($this->session->level){
			redirect('admin');
		}else{
			redirect('login');
		}
	}
}
