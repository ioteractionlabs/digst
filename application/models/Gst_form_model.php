<?php

class Gst_form_model extends CI_model{
	
	public function save($data){

		$this->db->insert('gst_form', $data);
		return $this->db->insert_id();	
	}
	public function save2($insert1,$data_table,$data_row)
	{
		if($data_row==1){
		$a=array(
			'gst_id'=>$insert1,
			'tableentry_index'=>$data_table['tableentry_index'],
			'tableentry_description'=>$data_table['tableentry_description'],
			'tableentry_hsncode'=>$data_table['tableentry_hsncode'],
			'tableentry_quantity'=>$data_table['tableentry_quantity'],
			'tableentry_uom'=>$data_table['tableentry_uom'],
			'tableentry_rate'=>$data_table['tableentry_rate'],
			'tableentry_total'=>$data_table['tableentry_total'],
			'tableentry_discount'=>$data_table['tableentry_discount'],
			'tableentry_taxable'=>$data_table['tableentry_taxable'],
			'tableentry_crate'=>$data_table['tableentry_crate'],
			'tableentry_camount'=>$data_table['tableentry_camount'],
			'tableentry_srate'=>$data_table['tableentry_srate'],
			'tableentry_samount'=>$data_table['tableentry_samount'],
			'tableentry_irate'=>$data_table['tableentry_irate'],
			'tableentry_iamount'=>$data_table['tableentry_iamount'],
			);
		$this->db->insert('gst_form_partial',$a);}
		else
		{
			for($i=0;$i<$data_row;$i++){
			$a=array(
			'gst_id'=>$insert1,
			'tableentry_index'=>$data_table['tableentry_index'][$i],
			'tableentry_description'=>$data_table['tableentry_description'][$i],
			'tableentry_hsncode'=>$data_table['tableentry_hsncode'][$i],
			'tableentry_quantity'=>$data_table['tableentry_quantity'][$i],
			'tableentry_uom'=>$data_table['tableentry_uom'][$i],
			'tableentry_rate'=>$data_table['tableentry_rate'][$i],
			'tableentry_total'=>$data_table['tableentry_total'][$i],
			'tableentry_discount'=>$data_table['tableentry_discount'][$i],
			'tableentry_taxable'=>$data_table['tableentry_taxable'][$i],
			'tableentry_crate'=>$data_table['tableentry_crate'][$i],
			'tableentry_camount'=>$data_table['tableentry_camount'][$i],
			'tableentry_srate'=>$data_table['tableentry_srate'][$i],
			'tableentry_samount'=>$data_table['tableentry_samount'][$i],
			'tableentry_irate'=>$data_table['tableentry_irate'][$i],
			'tableentry_iamount'=>$data_table['tableentry_iamount'][$i],
			);
		$this->db->insert('gst_form_partial',$a);
			}
		}
		return $this->db->insert_id();
	}
	public function display($key){

		$this->db->from('gst_form');
		$this->db->where('id',$key);
		$query = $this->db->get();
		$this->db->from('gst_form_partial');
		$this->db->where('gst_id',$key);
		$query1= $this->db->get();
		$a=array();
		
		array_push($a,$query->row(),$query1->result());
		
		return $a;

	}

}
?>