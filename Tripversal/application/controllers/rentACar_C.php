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
			$data['carRating']= $this->rentACar_M->get_all_car_rating();
			$data['notification']= $this->rentACar_M->get_all_notification();
			$this->load->view('RentACarPage', $data);
		}
	}
?>
