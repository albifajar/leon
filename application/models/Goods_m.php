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
        public function insert($data){
            //set time zone
            date_default_timezone_set('Asia/Jakarta');
            $nama = $data['name_goods'];
            //convert harga
            $harga = intval(implode('',explode(',', $data['prince'])));
            $deskripsi = $data['description'];
            $tanggal = date('Y-m-d');
            $waktu = date('H:i:s');
           	//insert ke tabel barang
            $this->db->query("INSERT INTO barang VALUES ('', '$nama','$tanggal','$waktu', '$harga', '$deskripsi')");
            //get id_barang
            $id_barang = $this->db->query("SELECT id_barang FROM barang WHERE nama_barang = '$nama' AND tanggal = '$tanggal' AND waktu = '$waktu'")->result_array()[0]['id_barang'];
            //get id_petugas di session
            $id_petugas = $this->session->id;
            //untuk status ada dua pilihan value yaitu 'buka' dan 'tutup'
            $status = 'tutup';
            //insert ke tabel lelang
            $this->db->query("INSERT INTO lelang(id_lelang, id_barang, harga_akhir, id_petugas, status) VALUES ('', '$id_barang','$harga','$id_petugas','$status') ");
            
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
        public function get(){
            $id_petugas = $this->session->id;
            //get data lelang
            $data = $this->db->query("SELECT lelang.id_barang AS id, barang.nama_barang AS nama_barang, lelang.harga_akhir AS harga_akhir, barang.harga_awal AS harga_awal, lelang.status AS status FROM `lelang` INNER JOIN barang ON barang.id_barang = lelang.id_lelang WHERE id_petugas = '$id_petugas'  ORDER BY barang.waktu DESC")->result_array();
            for($i=0;$i<count($data);$i++){
                $data[$i]['id'] = $this->encode_id($data[$i]['id']);
            }
            if($data){
                return $data;
            }else{
                return false;
            }
        }
        //encode id
        private function encode_id($id){
            $id = $id + 100000 + 72 + 84;
            return base64_encode($id);
        }
        //decode
        private function decode_id($id){
            $id = intval(base64_decode($id));
            return $id - 100000 - 72 - 84;
        }
        public function delete($id){
            //get data lelang
            $id = $this->decode_id($id);
            $data = $this->db->delete('barang', array('id_barang' => $id));
            if($data){
                return true;
            }else{
                return false;
            }
        }

}
