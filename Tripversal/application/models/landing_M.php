<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing_M extends CI_Model {
		public function get_all_user()
		{
			$this->db->select('*');
			$this->db->from('user');
			return $data = $this->db->get()->result_array();
		}
	}
?>
