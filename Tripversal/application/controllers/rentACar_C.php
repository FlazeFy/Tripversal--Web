<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class rentACar_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('rentACar_M');
			$this->load->model('landing_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$data['guideData']= $this->rentACar_M->get_all_guide();
			$data['loginData']= $this->landing_M->get_login_user();
			$data['carRating']= $this->rentACar_M->get_all_car_rating();
			$data['notification']= $this->rentACar_M->get_all_notification();
			$data['topUsedCar']= $this->rentACar_M->get_top_used_car();
			$data['tipsData']= $this->rentACar_M->get_all_tips();
			$this->load->view('rentacar/index', $data);
		}
		
		//Control sort by not finished.
		public function searchCarByControl()
		{
			$transmission = $this->input->post('transmission');
			$driver = $this->input->post('driver');
			$city = $this->input->post('city');		
	
			$this->session->set_userdata('set_transmission',$transmission);	
			$this->session->set_userdata('set_driver',$driver);	
			$this->session->set_userdata('set_city',$city);
			redirect('rentACar_C');	
		}
		public function bookCar()
		{
			$id = $this->input->post('id_CarGuide');
			$city = $this->input->post('city');

			$this->session->set_userdata('set_idCarGuide',$id);
			$this->session->set_userdata('set_city_onbook',$city);
			$this->session->set_userdata('set_typeBook','Car Rental');
			redirect('bookGuideCar_C');	
		}
	}
?>
