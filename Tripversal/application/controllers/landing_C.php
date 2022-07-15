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
		public function login()
		{
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
		public function createAcc()
		{
				
		}
	}
?>
