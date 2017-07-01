<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gst_form_controller extends CI_Controller{
		public function index(){	
			$this->load->view('gst_form');
		}
		public function get_data(){
			$data=$this->input->post('mydata');
			
			$this->load->model('gst_form_model');
			$this->gst_form_model->save($data);
		}
		
				 	
		  }
	}
?>
