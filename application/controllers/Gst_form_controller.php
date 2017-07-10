<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gst_form_controller extends CI_Controller{
	

			public function __construct()
	{
		parent::__construct();
	
	}

		public function index(){	
			 $data = array('upload_data' =>''); 
			$this->load->view('gst_form',$data);
			$this->load->helper('url');
			
	
		}
		public function get_data(){
			
			$data_whole=$this->input->post('mydata');
			$data_table=$this->input->post('mytable');
			$data_row=$this->input->post('myvalue');
			$a=array(
				'company_name'=>$data_whole['company_name'],
				'address_1'=>$data_whole['address_1'],
				'address_2'=>$data_whole['address_2'],
				'email'=>$data_whole['email'],
				'website'=>$data_whole['website'],
				'gstin_no'=>$data_whole['gstin_no'],
				'transportation_mode'=>$data_whole['transportation_mode'],
				'tax_payable'=>$data_whole['tax_payable'],
				'vehicle_no'=>$data_whole['vehicle_no'],
				'invoice_serial_no'=>$data_whole['invoice_serial_no'],
				'date_time_of_supply'=>$data_whole['date_time_of_supply'],
				'invoice_date'=>$data_whole['invoice_date'],
				'place_of_supply'=>$data_whole['place_of_supply'],
				'receiver_name'=>$data_whole['receiver_name'],
				'receiver_address'=>$data_whole['receiver_address'],
				'receiver_state'=>$data_whole['receiver_state'],
				'receiver_state_code'=>$data_whole['receiver_state_code'],
				'receiver_gstin_no'=>$data_whole['receiver_gstin_no'],
				'consignee_name'=>$data_whole['consignee_name'],
				'consignee_address'=>$data_whole['consignee_address'],
				'consignee_state'=>$data_whole['consignee_state'],
				'consignee_state_code'=>$data_whole['consignee_state_code'],
				'consignee_gstin_no'=>$data_whole['consignee_gstin_no'],
				'invoice_value'=>$data_whole['invoice_value'],
				'grand_total'=>$data_whole['invoice_total'],
				'freight_charges'=>$data_whole['freight_charges'],
				'loading_charges'=>$data_whole['loading_charges'],
				'insurance_charges'=>$data_whole['insurance_charges'],
				'other_charges'=>$data_whole['other_charges'],
				'invoice_total'=>$data_whole['net_total'],
				'certification'=>$data_whole['certification'],
				'reference_number'=>$data_whole['reference_number'],
				'terms_condition'=>$data_whole['terms_condition'],
				'signature'=>$this->input->post('sign'),
				'photo'=>$this->input->post('photo'),
				'authorised_name'=>$data_whole['authorised_name'],
				'authorised_designation'=>$data_whole['authorised_designation']
				);
			
			$this->load->model('gst_form_model');
			$insert1=$this->gst_form_model->save($a);
			$insert2=$this->gst_form_model->save2($insert1,$data_table,$data_row);	
			$pp=20;

			echo $insert1;
			
		}
		function get_pdf($id){
			$this->load->model('gst_form_model');
			$data_is=$this->gst_form_model->display($id);

			$data=array('form' => $data_is[0],'table' => $data_is[1],'image'=>APPPATH.'uploads/');
			$html=$this->load->view('invoice.php', $data, true);
		
			        $pdfFilePath = "output_pdf_name.pdf";
			         $this->load->library('m_pdf');
			   
			          $this->m_pdf->pdf->WriteHTML($html);
			          $this->m_pdf->pdf->Output($pdfFilePath, "D"); 

	
			        
			
		}
		public function get_img(){	

		 $name = $_FILES["file"]["name"];
		
    	 $ext = end((explode(".", $name))); # extra () to prevent notice
		 $config['upload_path']   = APPPATH.'uploads/';

         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors()); 
              // $this->load->view('upload_form', $error);
              print_r($error); 
         }
			
         else { 
        	
            $data = array('upload_data' => 'gfhbn'); 
           print_r($data);
		}
	}

	}
?>