<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Ongoing_M extends CI_Model {
		public function get_all_ongoing()
		{
            $condition = array(
                "id_context" => $this->session->userdata('set_idCarGuide'),
                "type_context" => $this->session->userdata('set_typeBook'),
                "MONTH(date_start)" => date("m"),
                "YEAR(date_start)" => date("Y"),
            );
			$this->db->select('DAY(date_start) as day');
			$this->db->from('ongoing');
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}
	}
?>
