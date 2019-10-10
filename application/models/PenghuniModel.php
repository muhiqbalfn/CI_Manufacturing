<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class PenghuniModel extends CI_Model {

		public function get_data($table){
			$query = $this->db->get($table);
			return $query->result();
		}

		public function add_data($table,$dat){  
	        $result = $this->db->insert($table,$dat);
	        return $result;
	    }

	    public function get_update_data($id){
			$query=$this->db->query("SELECT*FROM tb_penghuni WHERE id_penghuni='$id'");
			if($query->num_rows()>0){
				foreach ($query->result() as $value) {
					$data=array(
						'id_user'  => $value->id_user,
						'username' => $value->username,
						'email'    => $value->email,
						'password' => $value->password,
						'phone'    => $value->phone,
						'address'  => $value->address,
						'level'    => $value->level
					);
				}
			}
			return $data;
		}

		public function update_data($table,$data,$id){
			$this->db->set($data);
			$this->db->where($id);
			$this->db->update($table,$data);
		}

		public function del_data($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

	}


/* End of file PenghuniModel.php */
/* Location: ./application/models/PenghuniModel.php */