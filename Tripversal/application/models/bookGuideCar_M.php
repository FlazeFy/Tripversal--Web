<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class bookGuideCar_M extends CI_Model {
		//Control sort by not finished.
		public function get_all_car()
		{
			$this->db->select('*');
			$this->db->from('car');
			$this->db->order_by('price','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_guide()
		{
			$this->db->select('*');
			$this->db->from('guide');
			$this->db->order_by('price','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_car_rating()
		{
			$this->db->select('*');
			$this->db->from('car_rating');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_tips()
		{
			$this->db->select('*');
			$this->db->from('tips');
			return $data = $this->db->get()->result_array();
		}
	}
?>
