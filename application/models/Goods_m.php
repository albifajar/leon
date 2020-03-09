<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function validation_create(){
		$this->load->library('form_validation');
        //meng-costum ulang form validation
        $config = array(
            array(
            	'field' => 'name_goods',
                'label' => 'Nama Barang',
                'rules' => 'max_length[50]|min_length[3]|required'),
            array(
                'field' => 'prince',
                'label' => 'Harga Barang',
                'rules' => 'required|max_length[50]|min_length[2]'
             ),
            array(
            	'field' => 'description',
            	'label' => 'Deskripsi',
            	'rules' => 'required|max_length[20]|min_length[11]'
            )
        );
                //meng-costum massage pada rules
                $this->form_validation->set_message('min_length', '{field} terlalu pendek  (min {param} karakter)');
                $this->form_validation->set_message('max_length', '{field} terlalu panjang  (max {param} karakter)');
                $this->form_validation->set_message('integer', '{field} hanya berisi angka');
                $this->form_validation->set_message('matches', '{field} tidak sama');
                $this->form_validation->set_message('required', '%s jangan di kosongkan');
	          	//set $config ke set_rules
                $this->form_validation->set_rules($config);
                if($this->form_validation->run() == FALSE){
                        return FALSE;
                }else{
                        return TRUE;
                }
        }
        public function insert(){
       	$this->db->query('INSERT INTO tabel_a (nama, umur, alamat) OUTPUT INSERTED.'$nama', '$umur','$alamat' 
      INTO tabel_b (nama, umur, alamat) VALUES ('$nama', '$umur','$alamat'))     	
        }

}
