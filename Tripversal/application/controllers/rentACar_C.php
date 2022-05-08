<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class rentACar_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('rentACar_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$this->load->view('RentACarPage', $data);
		}
	}
?>
