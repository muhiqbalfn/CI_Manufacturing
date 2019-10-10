<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginModel extends CI_Model {

		public function login($user, $pass, $status){
			$this->db->where('user',$user);
			$this->db->where('pass',$pass);
			$this->db->where('status',$status);
			return $this->db->get('tb_penghuni')->row();
		}		

	}


/* End of file BomModel.php */
/* Location: ./application/models/BomModel.php */