<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Login berisi link page yang akan digunakan dalam pengelolaan login
	 */
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		//cek session
//		$this->on_session();
		$this->load->helper('url');
		$this->load->model('account_m','account');
	}
	private function on_session(){
		
		if($this->session->level == 'admin'){
			//jika level admin maka reload admin
			redirect('admin');
		}elseif($this->session->level == 'petugas'){
			//jika level petugas maka reload auctioneer
			redirect('auctioneer');
		}elseif($this->session->level == 'user'){
			//jika level petugas maka reload auctioneer
			redirect('');
		}else{
		}
	}
	public function index()
	{
		$this->load->helper ('form');

		$send = array("msg"=>"");
		//kirim pesan kesalahan
		if($msg = $this->input->get('msg')){
			$send['msg'] = '<div class="alert alert-danger my-3" role="alert">'.$msg.'</div>';
		}
		$this->load->view('login', $send);
	}
	public function process()
	{
		$data = $this->account->check_login($this->input->post());
		if(count($data)>2){
			//set ke session
			$this->session->set_userdata($data);
			if($data['level'] == 'admin'){
				//masuk ke halaman admin
				redirect('admin');
			}elseif($data['level'] == 'petugas'){
				//masuk ke halaman auctioneer
				redirect('auctioneer');
			}elseif($data['level'] == 'user'){
				redirect('');
			}else{
				redirect('login');
			}
		}else{
			redirect('login?msg=Username dan password salah');
		}
	}
}
