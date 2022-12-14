<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class bookGuideCar_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('bookGuideCar_M');
			$this->load->model('rentACar_M');
			$this->load->model('landing_M');
			$this->load->model('Ongoing_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->bookGuideCar_M->get_all_car();
			$data['userData']= $this->bookGuideCar_M->get_all_user();
			$data['carData2']= $this->bookGuideCar_M->get_all_car2();
			$data['guideData']= $this->bookGuideCar_M->get_all_guide();
			$data['loginData']= $this->landing_M->get_login_user();
			$data['guideRating']= $this->rentACar_M->get_all_guide_rating();
			$data['carRating']= $this->bookGuideCar_M->get_all_car_rating();
			$data['tipsData']= $this->bookGuideCar_M->get_all_tips();
			$data['travelData']= $this->bookGuideCar_M->get_all_travel();
			$data['ongoingData']= $this->Ongoing_M->get_all_ongoing();
			$this->load->view('detail/index', $data);
		}
		public function copyCoor(){
			$data['success'] = "Coordinate has been copied"; 
			$this->index();
			$this->load->view('detail/index', $data);
		}
		
	}
?>
