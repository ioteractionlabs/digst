<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gst_form_controller extends CI_Controller{
		public function index(){	
			$this->load->view('testing');
		}
		public function get_data(){
			$data=$this->input->post('mydata');
			print_r($data);
			$this->load->model('gst_form_model');
			$this->gst_form_model->save($data);
		}
		 public function save_download()
		  { 
				//load mPDF library
				$this->load->library('M_pdf');
				//load mPDF library
				//now pass the data//
				 $this->data['title']="MY PDF TITLE 1.";
				 $this->data['description']="";
				 $this->data['description']=$this->official_copies;
				 //now pass the data //
		 
				
				$html=$this->load->view('pdf_output',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
		 	 
				//this the the PDF filename that user will get to download
				$pdfFilePath ="mypdfName-".time()."-download.pdf";
		 
				
				//actually, you can pass mPDF parameter on this load() function
				$pdf = $this->m_pdf->load();
				//generate the PDF!
				$pdf->WriteHTML($html,2);
				//offer it to user via browser download! (The PDF won't be saved on your server HDD)
				$pdf->Output($pdfFilePath, "D");
				 
				 	
		  }
		// public function fetch(){
		// 	$this->load->model('Chart_model');
		// 	echo $this->Chart_model->display_pie_chart();
		// }
	}
?>