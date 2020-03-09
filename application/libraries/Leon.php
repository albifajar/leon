<?php
class Leon {

        public function validation()
        {

                //meng-costum ulang form validation
                $config = array(
                        array(
                                'field' => 'username',
                'label' => 'Nama Pengguna',
                'rules' => 'required|max_length[50]|min_length[3]|callback_username_check',
                        ),
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
                $this->form_validation->set_message('required', '%s jangan di kosongkan');
                $this->form_validation->set_message('min_length', '{field} terlalu pendek  (min {param} karakter)');
                $this->form_validation->set_message('max_length', '{field} terlalu panjang  (max {param} karakter)');
                $this->form_validation->set_message('integer', '{field} hanya berisi angka');
                $this->form_validation->set_message('matches', '{field} tidak sama');
                $this->form_validation->set_rules($config);
                if($this->form_validation->run() == false){
                        return false;
                }else{
                        return true;
                }
        }

}