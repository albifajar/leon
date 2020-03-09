<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function validation_registration(){
		$this->load->library('form_validation');
        //meng-costum ulang form validation
        $config = array(
            array(
            	'field' => 'username',
                'label' => 'Nama Pengguna',
                'rules' => 'max_length[50]|min_length[3]|callback_username_check|required'),
            array(
                'field' => 'full_name',
                'label' => 'Nama Lengkap',
                'rules' => 'required|max_length[50]|min_length[2]'
             ),
            array(
            	'field' => 'phone_number',
            	'label' => 'Nomor Telepon',
            	'rules' => 'required|max_length[14]|min_length[11]|integer'
            ),
            array(
            	'field' => 'password',
                'label' => 'Kata Sandi',
                'rules' => 'required|max_length[16]|min_length[6]'
            ),
    		array(
                'field' => 'confirm_password',
                'label' => 'Konfirmasi Kata Sandi',
                'rules' => 'required|matches[password]'
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

        public function username_checkout($username)
        {
			$this->db->query("SELECT * FROM petugas WHERE username = '$username'");
			if($this->db->affected_rows()>0){
				$this->db->query("SELECT * FROM petugas WHERE username = '$username'");
				if($this->db->affected_rows()>0){
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}             
        }
	public function create_auctioneer($data){
		//mengencripsi password
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		//menambahkan akun baru
		$create = array(
			'id_petugas' => "",
			'nama_petugas' => $data['full_name'],
			'username' => $data['username'],
			'password' => $data['password'],
			'id_level' => 2
			);
		$this->db->insert('petugas', $create);
		if($this->db->affected_rows()>0){
		//jika tidak terjadi kesalahan maka return nilai true
			return true;
		}else{
		//jika terjadi kesalahan maka return nilai false
			return false;
		}
	}
	public function create_user($data){
		//mengencripsi password
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		//menambahkan akun baru
		$create = array(
			'id_user' => "",
			'nama_lengkap' => $data['full_name'],
			'username' => $data['username'],
			'password' => $data['password'],
			'telp' => $data['phone_number'],
			);
		$this->db->insert('masyarakat', $create);
		if($this->db->affected_rows()>0){
		//jika tidak terjadi kesalahan maka return nilai true
			return true;
		}else{
		//jika terjadi kesalahan maka return nilai false
			return false;
		}
	}
	public function check_login($data){
		//inisialisasi
		$username = $data['username'];
		$password = $data['password'];
		//get data petugas
		$dat = $this->db->query("SELECT petugas.id_petugas as id, petugas.username as username, level.level as level, petugas.password as password FROM petugas INNER JOIN level ON petugas.id_level = level.id_level WHERE username = '$username'")->result_array()[0];
		
		if($this->db->affected_rows()<1){
			$dat = $this->db->query("SELECT id_user as id, username, password FROM masyarakat WHERE username = '$username'")->result_array()[0];
			$dat['level'] = 'user';
		}
		if($this->db->affected_rows()>0){
			if(password_verify($password, $dat['password'])){
				return $dat;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}

}
