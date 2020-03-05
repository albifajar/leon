<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('account_m','account');
	}
	public function index()
	{
		$this->load->helper('form');

		$send = array('msg'=>'');
		if($msg = $this->input->get('msg')){
			$send['msg'] = '<div class="alert alert-danger my-3" role="alert">'.$msg.'</div>';
		}
		$this->load->view('register', $send);
	}
	public function process()
	{
		if(($msg = $this->account->create($this->input->post())) === true){
			redirect('login');
		}else{
			redirect('registration?msg='.$msg);
		}
	}
}
