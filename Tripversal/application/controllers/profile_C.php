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
			$this->load->view('ProfilePage', $data);
		}
	}
?>
