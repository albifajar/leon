<?php
class Leon {

        //encode id
        public function encode_id($id){
            $id = $id + 100000 + 72 + 84;
            return base64_encode($id);
        }
        //decode
        public function decode_id($id){
            $id = intval(base64_decode($id));
            return $id - 100000 - 72 - 84;
        }
        public function value_random($angka){
		$string = '';
		$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";
		$data = array();
		for($i=0;$i<$angka;$i++){

			$post = rand(0, strlen($karakter)-1);
			$string .= $karakter[$post];
		}
		return $string;
	}

}