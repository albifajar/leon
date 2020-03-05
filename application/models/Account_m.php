<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_m extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function create($data){
		//cek ketersedian username
		$username = $data['username'];
		$this->db->query("SELECT * FROM petugas WHERE username = '$username'");
		if($this->db->affected_rows()==0){
			//mencocokan password dengan confirm password
			if ($data['password'] == $data['confirm_password']) {
				//mengencripsi password
				$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
				//menambahkan akun baru
				$data = array(
					'id_petugas' => "",
					'nama_petugas' => $data['full_name'],
					'username' => $data['username'],
					'password' => $data['password'],
					'id_level' => 2
				);
				$this->db->insert('petugas', $data);
				
				if($this->db->affected_rows()>0){
					//jika tidak terjadi kesalahan maka return nilai true
					return true;
				}
			}else{
				//jika password dan confrim_password tidak sama
				return "Kata sandi dengan konfiramasi kata sandi tidak sama";
			}
		}else{
			//jika username tidak tersedia
			return "username yang anda masukan tidak tersedia";
		}
	}
	public function check_login(){

	}

}
