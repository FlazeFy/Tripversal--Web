<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class profile_M extends CI_Model {
		//Change user data.
		function updateProfile($data)
		{
			$id = $this->input->post('id_user');
			$this->db->where('id_user', $id);
			$this->db->update('user', $data);
		}
	}
?>
