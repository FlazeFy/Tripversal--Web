<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class message_C extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('rentACar_M');
			$this->load->model('message_M');
			$this->load->model('landing_M');
		}
		public function index(){
			$data = [];
			$data['carData']= $this->rentACar_M->get_all_car();
			$data['guideData']= $this->rentACar_M->get_all_guide();
			$data['loginData']= $this->landing_M->get_login_user();
			$data['contactData']= $this->message_M->get_all_contact();
			$data['messageData']= $this->message_M->get_all_message();
			$data['newMessageData']= $this->message_M->get_last_message();
			$this->load->view('message/index', $data);
		}

		public function getMsg(){
			$this->db->select('message.body, message.id_contact, user.imageURL, message.id_message, message.datetime, message.sender, contact.type, garage.garage_username, guide.guide_fullname, guide.phone, garage.id_garage, guide.id_guide');
			$this->db->from('message');
			$this->db->join('contact','contact.id_contact = message.id_contact');
			$this->db->join('user','user.id_user = contact.id_user');
			$this->db->join('garage','contact.id_garage_guide = garage.id_garage');
			$this->db->join('guide','contact.id_garage_guide = guide.id_guide');
			$condition = array('message.id_contact' => $this->session->userdata('set_id_contact'));
			$this->db->where($condition);
			$this->db->order_by('message.datetime','ASC');
			$data = $this->db->get()->result_array();

			echo json_encode($data);
			exit;	
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
