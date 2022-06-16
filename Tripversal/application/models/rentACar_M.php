<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class rentACar_M extends CI_Model {
		//This model is used by rent a car page and rent guide page.
		//Control sort by not finished.
		public function get_all_car()
		{
			$this->db->select('*');
			$this->db->from('car');
			$this->db->join('garage','car.id_garage = garage.id_garage');
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
		public function get_all_guide_rating()
		{
			$this->db->select('*');
			$this->db->from('guide_rating');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_notification()
		{
			$this->db->select('*');
			$this->db->from('notification');
			$this->db->order_by('datetime','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_top_used_car(){
			$this->db->select('rent.id_car_guide, rent.city, car.car_name, car.id_car, car.plate_number, car.year, car.location, car.seat, car.price, COUNT(rent.id_car_guide) as total_order');
			$this->db->from('rent');
			$this->db->join('car','car.id_car = rent.id_car_guide');
			$condition = array('rent.type' => 'Car Rent');
			$this->db->where($condition);
			$this->db->group_by('rent.id_car_guide');
			$this->db->order_by('total_order','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_top_used_guide(){
			$this->db->select('rent.id_car_guide, rent.city, guide.fullname, guide.id_guide, guide.language, guide.price, guide.phone, guide.location, COUNT(rent.id_car_guide) as total_order');
			$this->db->from('rent');
			$this->db->join('guide','guide.id_guide = rent.id_car_guide');
			$condition = array('rent.type' => 'Tour Guide');
			$this->db->where($condition);
			$this->db->group_by('rent.id_car_guide');
			$this->db->order_by('total_order','DESC');
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
