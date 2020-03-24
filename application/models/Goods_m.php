<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods_m extends CI_Model {

	public function __construct(){
		$this->load->database();
        $this->load->library('leon');
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
                'rules' => 'required|max_length[20]|min_length[2]'
             ),
            array(
            	'field' => 'description',
            	'label' => 'Deskripsi',
            	'rules' => 'required|min_length[15]'
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
            $nama_gambar = $this->do_upload();
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
            $this->db->query("INSERT INTO lelang(id_lelang, id_barang, harga_akhir, id_petugas, status) VALUES ('', '$id_barang','$harga','$id_petugas','$status');");
            $this->db->query("INSERT INTO gambar_barang VALUES ('', '$id_barang', '$id_petugas', '$nama_gambar') ");
            
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
        public function update($d){
            $d;
        }
        public function get(){
            $id_petugas = $this->session->id;
            //get data lelang
            $data = $this->db->query("SELECT lelang.id_barang AS id, barang.nama_barang AS nama_barang, lelang.harga_akhir AS harga_akhir, barang.harga_awal AS harga_awal, lelang.status AS status FROM `lelang` INNER JOIN barang ON barang.id_barang = lelang.id_barang WHERE id_petugas = '$id_petugas'  ORDER BY barang.waktu DESC")->result_array();

            for($i=0;$i<count($data);$i++){
                $data[$i]['id'] = $this->leon->encode_id($data[$i]['id']);
                $data[$i]['harga_akhir'] = 'Rp. '.number_format($data[$i]['harga_akhir'],2,',','.');
                $data[$i]['harga_awal'] = 'Rp. '.number_format($data[$i]['harga_awal'],2,',','.');
            }
            if($data){
                return $data;
            }else{
                return array();
            }
        }
        public function get_the($id){
            $id = $this->leon->decode_id($id);
            $data = $this->db->query("SELECT lelang.id_barang AS id, barang.nama_barang AS nama_barang, lelang.harga_akhir AS harga_akhir, barang.harga_awal AS harga_awal, lelang.status AS status, barang.deskripsi AS deskripsi FROM `lelang` INNER JOIN barang ON barang.id_barang = lelang.id_barang WHERE lelang.id_barang = '$id'")->result_array()[0];
            $data['harga_akhir'] = 'Rp. '.number_format($data['harga_akhir'],2,',','.');
            $data['id'] = $this->leon->encode_id($data['id']);

            return $data;
        }
        public function get_history_the($id){
            $id = $this->leon->decode_id($id);
            $data = $this->db->query("SELECT history_lelang.harga_penawaran as harga_penawaran, masyarakat.username as username, history_lelang.waktu as waktu, history_lelang.tanggal as tanggal FROM `history_lelang` INNER JOIN masyarakat ON history_lelang.id_user = masyarakat.id_user WHERE id_barang = '$id'")->result_array();
            return $data;
        }
        public function delete($id){
            //get data lelang
            $id = $this->leon->decode_id($id);
            $data = $this->db->delete('barang', array('id_barang' => $id));
            if($data){
                return true;
            }else{
                return false;
            }
        }
        public function set_status($d){
            $d['i'] = $this->leon->decode_id($d['i']);
            $this->db->set('status', $d['s']);
            $this->db->where('id_barang', $d['i']);
            $this->db->update('lelang');
        }
        public function do_upload(){
            $this->load->library('session');
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']             = $this->leon->encode_id($this->session->id).'_'.$this->leon->value_random(10);
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768; 
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('file')){
               return false;
            }else{
                return $this->upload->data('file_name');
            }
        }

}
