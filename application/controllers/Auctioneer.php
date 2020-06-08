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
	public function goods($id=false){
		$this->load->helper('form');
		if($s = $this->input->post()){
			$s = !isset($s['status'])? 'tutup':'buka';
			$arr = ['s' => $s, 'i' => $id];
			$this->goods->set_status($arr);
			$this->session->set_userdata(array('massage' => 'Status telah di'.$arr['s']));
			redirect('auctioneer/goods/'.$id);
		}else{ 
			if($id == false){
				redirect('auctioneer');
				return;
			}else{
				$arr = array(
					'goods' => $this->goods->get_the($id),
					'history' => $this->goods->get_history_the($id)
				);

			$this->load->view('auctioneer/goods', $arr);	
			}
		}
	}
	public function goodsPDF($id=false)
	{
		$mpdf = new \Mpdf\Mpdf();
			$arr = array(
				'goods' => $this->goods->get_the($id),
				'history' => $this->goods->get_history_the($id)
			);
		$data = $this->load->view('auctioneer/goodsPDF', $arr, true);
		$mpdf->WriteHTML($data);
		$mpdf->Output("Report.pdf", \Mpdf\Output\Destination::INLINE);
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
	public function goods_update($data=false){
		if($data == false){
			redirect('auctioneer');
		}
		if($d = $this->input->post()){

			if($this->goods->update($a)){
			$this->session->set_userdata(array('massage' => 'Data berhasil diubah'));
				redirect('auctioneer/goods_update'. $data);
			}
		}
		$this->load->helper('form');
			$this->load->view('auctioneer/goods_update', array('goods' => $this->goods->get_the($data)));
	}
	public function goods_create(){
		//convert prince ke integer
		 intval(implode('',explode(',', $this->input->post('prince'))));
		$data['cats'] = $this->goods->categories();
		if($this->goods->validation_create()){
			if($this->goods->insert($this->input->post())){
				redirect('auctioneer');
			}else{
				$this->load->view('auctioneer/goods_create', $data);
			}
		}else{
			
		$this->load->view('auctioneer/goods_create', $data);
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
