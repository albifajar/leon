<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function __construct(){
		$this->load->database();
        $this->load->library('leon');
	}
    public function get_goods(){
        $data = $this->db->query('SELECT barang.id_barang as id, barang.nama_barang as nama, lelang.harga_akhir as harga, gambar_barang.nama_gambar as gambar FROM `barang` INNER JOIN gambar_barang ON barang.id_barang = gambar_barang.id_barang INNER JOIN lelang ON barang.id_barang = lelang.id_barang ')->result_array();

            for($i=0;$i<count($data);$i++){
                $data[$i]['id'] = $this->leon->encode_id($data[$i]['id']);
                $data[$i]['harga'] = number_format($data[$i]['harga'],2,',','.');
            }
            return $data;	
    }
    public function get_the_goods($id){
            $id = $this->leon->decode_id($id);
        	$data = $this->db->query("SELECT barang.id_barang as id, barang.nama_barang as nama, lelang.harga_akhir as harga, gambar_barang.nama_gambar as gambar, barang.deskripsi FROM `barang` INNER JOIN gambar_barang ON barang.id_barang = gambar_barang.id_barang INNER JOIN lelang ON barang.id_barang = lelang.id_barang WHERE barang.id_barang = '$id'")->result_array()[0];

            $data['id'] = $this->leon->encode_id($data['id']);
            $data['harga'] = number_format($data['harga'],2,',','.');

            return $data;	
    }

}
