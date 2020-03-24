<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('user_m','user');
	}
	public function index()
	{
		$this->load->view('user/main',
			array(
				"data" => $this->user->get_goods()
			)
		);
	}
	public function logout(){
		$this->session->sess_destroy();
		if($this->session->level){
			redirect('user');
		}else{
			redirect('login');
		}
	}
	public function goods($id = false)
	{

		$the_goods = $this->user->get_the_goods($id);
		if($the_goods == false){
			redirect('errors');
			return;
		}
		if($prince = $this->input->post('prince')){
			$u_prince = intval(implode('',explode('.', explode(',', $prince)[0])));
			$prince = intval(implode('',explode('.', explode(',', $the_goods['harga'])[0])));
			if($u_prince > $prince){
				$data = array(
					'id_user' => $this->session->id,
					'id_barang' => $id,
					'harga' =>  $u_prince	
				);
				$this->user->set_history($data);
				$this->session->set_userdata(array('status' => 'success'));
				redirect('user/goods/'.$id);
			}else{
				$this->session->set_userdata(array('status' => 'error'));
				redirect('user/goods/'.$id);
			}

		}else{
			$this->load->view('user/goods',
				array(
					'data' => $the_goods
				)
			);
		}
	}
}
