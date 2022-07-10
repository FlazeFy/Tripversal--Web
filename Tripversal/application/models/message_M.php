<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class message_M extends CI_Model {
		public function get_all_contact()
		{
			$this->db->select('*');
			$this->db->from('contact');
			$this->db->join('user','user.id_user = contact.id_user');
			$this->db->join('garage','garage.id_garage = contact.id_garage_guide');
			$this->db->join('guide','guide.id_guide = contact.id_garage_guide');
			$this->db->order_by('dateAdded','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_message()
		{
			$this->db->select('*');
			$this->db->from('message');
			$this->db->join('contact','contact.id_contact = message.id_contact');
			$this->db->order_by('datetime','ASC');
			return $data = $this->db->get()->result_array();
		}
		public function get_last_message()
		{
			$this->db->select('*');
			$this->db->from('message');
			$this->db->join('contact','contact.id_contact = message.id_contact');
			$this->db->order_by('datetime','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function insert_message($data)
		{
			$this->db->insert('message',$data);	
			redirect('message_C');
		}
		
		public function delete_message($data)
		{
			$this->db->delete('message',$data);	
			redirect('message_C');
		}
	}
?>
