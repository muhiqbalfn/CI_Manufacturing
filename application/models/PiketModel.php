<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class PiketModel extends CI_Model {

		public function get_data(){
			$this->db->select('*');
			$this->db->from('tb_penghuni');
			$this->db->join('tb_piket','tb_penghuni.id_penghuni=tb_piket.id_penghuni','inner');
			$this->db->join('tb_hari','tb_piket.id_hari=tb_hari.id_hari','inner');
			return $this->db->get()->result();
		}

	}


/* End of file PiketModel.php */
/* Location: ./application/models/PiketModel.php */