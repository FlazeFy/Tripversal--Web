<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class bookGuideCar_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('bookGuideCar_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->bookGuideCar_M->get_all_car();
			$data['guideData']= $this->bookGuideCar_M->get_all_guide();
			$data['carRating']= $this->bookGuideCar_M->get_all_car_rating();
			$data['tipsData']= $this->bookGuideCar_M->get_all_tips();
			$this->load->view('BookGuideCarPage', $data);
		}
		
		
	}
?>
