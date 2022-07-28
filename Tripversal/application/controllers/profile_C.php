<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class profile_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('landing_M');
			$this->load->model('profile_M');
		}
		public function index(){
			$data = [];
			$data['loginData']= $this->landing_M->get_login_user();
			$this->load->view('profile/index', $data);
		}

		//Change user data.
		public function updateData(){
			$data = [
				"fullname" => $this->input->post('fullname'),
				"address" => $this->input->post('address'),
				"nik" => $this->input->post('nik'),
				"password" => $this->input->post('password'),
				"phone" => $this->input->post('phone')
			];
			$this->profile_M->updateProfile($data, 'user');
			$data['success'] = "Profile has been updated"; 
			$this->index();
			$this->load->view('profile/index', $data);
		}

		//Upload user profile image.
		public function updateImage(){
			//Get user image url.
			$this->db->select('*');
			$this->db->from('user');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('username',$condition);
			$user = $this->db->get()->result_array();
			foreach($user as $u){
				$oldImage = $u['imageURL'];
			}

			//Delete old image.
			$old = trim($oldImage);
			unlink('./assets/uploads/user/'.$old.'.jpg');

			//Upload new image.
			$new = substr(md5(uniqid(mt_rand(), true)), 0, 30);
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads/user/',
				"allowed_types" => 'jpg',
				"max_size" => 5000,
				"remove_spaces" => TRUE,
				"file_name" => 'user_'.$new 
			));
			if (!$this->upload->do_upload('uploadImage')) {
				$data['failed'] = "Your image is to big or not jpg!"; 
				$this->index();
				$this->load->view('profile/index', $data);
			} else {
				$data = [
					"imageURL" => 'user_'.$new 
				];
				$this->profile_M->updateProfile($data, 'user');
				$data['success'] = "Profile has been updated"; 
				$this->index();
				$this->load->view('profile/index', $data);
			}
		}
	}
?>
