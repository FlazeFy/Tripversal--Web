<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing_M extends CI_Model {
		public function get_all_user()
		{
			$this->db->select('*');
			$this->db->from('user');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_driver()
		{
			$this->db->select('*');
			$this->db->from('car');
			$this->db->group_by('driver');
			$this->db->where('driver !=', 'none');
			return $data = $this->db->get()->result_array();
		}
		function insert_user($data)
		{
			$this->db->insert('user',$data);
		}
		public function get_login_user()
		{
			$this->db->select('*');
			$this->db->from('user');
			$condition = array('username' => $this->session->userdata("userTrack"));
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}
	}
?>
