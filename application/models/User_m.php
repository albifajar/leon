<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function __construct(){
		$this->load->database();
        $this->load->library('leon');
	}
    public function get_goods($v = false){
        if($v == false){
        $data = $this->db->query("SELECT barang.id_barang as id, barang.nama_barang as nama, lelang.harga_akhir as harga, lelang.tanggal_lelang as tanggal_akhir, gambar_barang.nama_gambar as gambar FROM `barang` INNER JOIN gambar_barang ON barang.id_barang = gambar_barang.id_barang INNER JOIN lelang ON barang.id_barang = lelang.id_barang WHERE lelang.status = 'buka'
            ")->result_array();
        }else{

        $data = $this->db->query("SELECT barang.id_barang as id, barang.nama_barang as nama, lelang.harga_akhir as harga, gambar_barang.nama_gambar as gambar FROM `barang` INNER JOIN gambar_barang ON barang.id_barang = gambar_barang.id_barang INNER JOIN lelang ON barang.id_barang = lelang.id_barang WHERE lelang.status = 'buka' AND barang.slug_kategori = '$v'")->result_array();

        }
            for($i=0;$i<count($data);$i++){
                $data[$i]['id'] = $this->leon->encode_id($data[$i]['id']);
                $data[$i]['harga'] = number_format($data[$i]['harga'],2,',','.');
            }
            return $data;	
    }
    public function get_the_goods($id){
            $id = $this->leon->decode_id($id);
        	$data = $this->db->query("SELECT barang.id_barang as id, barang.nama_barang as nama, lelang.harga_akhir as harga, gambar_barang.nama_gambar as gambar, barang.deskripsi, lelang.tanggal_lelang as tanggal_akhir FROM `barang` INNER JOIN gambar_barang ON barang.id_barang = gambar_barang.id_barang INNER JOIN lelang ON barang.id_barang = lelang.id_barang WHERE barang.id_barang = '$id'")->result_array()[0];
            if($this->db->affected_rows()<1){
                return FALSE;
            }
            $data['id'] = $this->leon->encode_id($data['id']);
            $data['harga'] = number_format($data['harga'],2,',','.');

            return $data;	
    }
    public function set_history($data){
    	$id_barang = $this->leon->decode_id($data['id_barang']);
    	$id_user = $data['id_user'];
    	$harga = $data['harga'];
	   	$this->db->query("UPDATE lelang SET id_user = '$id_user', harga_akhir = '$harga' WHERE id_barang = '$id_barang'");
        $id_lelang = $this->db->query("SELECT id_lelang FROM lelang WHERE id_barang = '$id_barang'")->result_array()[0]['id_lelang'];

            date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d');
            $waktu = date('H:i:s');
        $this->db->query("INSERT INTO history_lelang VALUES ('','$id_lelang', '$id_barang', '$id_user', '$harga', '$tanggal', '$waktu');");
    }
    public function get_iduser_in_good($id){
        $id = $this->leon->decode_id($id);
        $d = $this->db->query("SELECT DISTINCT(id_user) FROM `history_lelang` WHERE id_barang = '$id' ")->result_array();
        for($i=0; $i < count($d); $i++){
            $d[$i] = $d[$i]['id_user'];
        }
        return array_values($d);
    }
    public function categories(){
        return $this->db->query("SELECT DISTINCT barang_kategori.nama as nama,barang_kategori.slug as slug FROM barang_kategori RIGHT JOIN barang ON barang_kategori.slug = barang.slug_kategori ")->result_array();

    }
    public function get_profile($id = false){
        if($id !== false){
                $this->db->where('id_user', $id);
        return  $this->db->get('masyarakat')
                    ->result_array()[0];   
        }
    }
    public function user_history($id = false){
        if($id !== false){
        $this->db->select("
            barang.nama_barang as nama_barang,
            barang.id_barang as id_barang, 
            lelang.harga_akhir as harga_akhir,
            lelang.tanggal_lelang as tanggal_akhir,
            lelang.status as status,
            masyarakat.username as username")
         ->from("history_lelang")
         ->join("lelang", "history_lelang.id_lelang = lelang.id_lelang")
         ->join("barang", "history_lelang.id_barang = barang.id_barang")
         ->join("masyarakat", "lelang.id_user = masyarakat.id_user")
         ->where("history_lelang.id_user = $id");
        
        $this->db->distinct();
        $data = $this->db->get()->result_array();
        for($i=0;$i<count($data);$i++){
            $data[$i]['id_barang'] = $this->leon->encode_id($data[$i]['id_barang']);
            $data[$i]['harga_akhir'] = 'Rp. '.number_format($data[$i]['harga_akhir'],2,',','.');
        }
        return $data;
    }
}

}
