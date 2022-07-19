<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('landing_M');
			$this->load->model('rentACar_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$data['userData']= $this->landing_M->get_all_user();
			$data['guideData']= $this->rentACar_M->get_all_guide();
			$data['driverData']= $this->landing_M->get_all_driver();
			$this->load->view('LandingPage', $data);
		}
		public function login(){
			//Get input data.
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//Check user data.
			$this->db->select('*');
			$this->db->from('user');
			$condition = array('username' => $username, 'password' => $password);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 1){
				$this->session->set_userdata('userTrack',$username);	
				redirect('rentACar_C');
			}else{
				$data['errorLogin'] = "Wrong Username or Password!"; 
				$this->index();
				$this->load->view('LandingPage', $data);
			}
		}
		public function createAcc(){
			//Get input data.
			$username = $this->input->post('username');
			$fullname = $this->input->post('fullname');
			$address = $this->input->post('address');
			$nik = $this->input->post('nik');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');

			//Check user data.
			$this->db->select('*');
			$this->db->from('user');
			$condition = array('username' => $username);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			
			if(count($userCheck) != 1){
				//Profile image setting.
				$new = substr(md5(uniqid(mt_rand(), true)), 0, 30);
				$initialize = $this->upload->initialize(array(
					"upload_path" => './assets/uploads/user/',
					"allowed_types" => 'jpg',
					"max_size" => 5000,
					"remove_spaces" => TRUE,
					"file_name" => 'user_'.$new
				));
				//Check image upload
				if (!$this->upload->do_upload('uploadImage')) {
					$data['errorLogin'] = "Your image is to big or not jpg!"; 
					$this->index();
					$this->load->view('LandingPage', $data);
				} else {
					//Data for insert.
					$user = array(
						"fullname" => $fullname,
						"username" => strtolower($username),
						"address" => $address,
						"nik" => $nik,
						"email" => $email,
						"password" => $password,
						"phone" => $phone,
						"imageURL" => 'user_'.$new
					);

					$this->landing_M->insert_user($user, 'user');
					$this->session->set_userdata('userTrack',$username);	
					redirect('rentACar_C');
				}
			} else {
				$data['errorLogin'] = "Username already been taken!"; 
				$this->index();
				$this->load->view('LandingPage', $data);
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect('http://localhost/Tripversal');
		}
	}
?>
