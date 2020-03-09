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

	public function index(){

		$this->load->helper('form');
		if ($this->account->validation_registration() == FALSE) {
			$this->load->view('register');
		}else{
			if($this->account->create_user($this->input->post())){
				redirect('login');
			}else{
				redirect('registration');
			}
		}
	}
	

        public function username_check($str)
        {
        	if($str !==  ""){
                if ($this->account->username_checkout($str) == false)
                {
			    	$this->form_validation->set_message('username_check', '{field} tidak tersedia');
                	return FALSE;
                }else{
                	return TRUE;
                }
            }else{
            	return true;
            }
        }
}
