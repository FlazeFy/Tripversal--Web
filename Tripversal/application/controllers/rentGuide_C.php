<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class rentGuide_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('rentACar_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$data['guideData']= $this->rentACar_M->get_all_guide();
			$data['guideRating']= $this->rentACar_M->get_all_guide_rating();
			$data['notification']= $this->rentACar_M->get_all_notification();
			$data['topUsedGuide']= $this->rentACar_M->get_top_used_guide();
			$data['tipsData']= $this->rentACar_M->get_all_tips();
			$this->load->view('RentGuidePage', $data);
		}
		
		//Control sort by not finished.
		public function searchGuideByControl()
		{
			$language = $this->input->post('language');
			$city = $this->input->post('city');		
	
			$this->session->set_userdata('set_language',$language);	
			$this->session->set_userdata('set_city',$city);
			redirect('http://localhost/Tripversal/rentGuide_C');	
		}
		public function bookGuide()
		{
			$id = $this->input->post('id_CarGuide');
			$city = $this->input->post('city');

			$this->session->set_userdata('set_idCarGuide',$id);
			$this->session->set_userdata('set_city_onbook',$city);
			$this->session->set_userdata('set_typeBook','Tour Guide');
			redirect('bookGuideCar_C');	
		}
	}
?>
