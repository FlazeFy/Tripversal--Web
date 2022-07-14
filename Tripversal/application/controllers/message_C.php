<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class message_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('rentACar_M');
			$this->load->model('message_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$data['guideData']= $this->rentACar_M->get_all_guide();
			$data['contactData']= $this->message_M->get_all_contact();
			$data['messageData']= $this->message_M->get_all_message();
			$data['newMessageData']= $this->message_M->get_last_message();
			$this->load->view('MessagePage', $data);
		}
		public function selectContact()
		{
			$id = $this->input->post('id_contact');

			$this->session->set_userdata('set_id_contact',$id);
			redirect('message_C');	
		}
		public function sendMessage()
		{
			$type = "Text";
			$data = array(
				'id_message' => 'NULL',
				'id_contact' => $this->session->userdata('set_id_contact'),
				'body' => $this->input->post('body'),
				'datetime' => date("Y/m/d h:i:sa"),
				'type' => $type,
				'sender' => 'customer',
			);
			$this->message_M->insert_message($data, 'message');
				
			redirect('message_C');	
		}
		public function unsend()
		{
			$data = array(
				'id_message' => $this->input->post('id_message'),
			);
			$this->message_M->delete_message($data, 'message');
				
			redirect('message_C');	
		}
	}
?>
