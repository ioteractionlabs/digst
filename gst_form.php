<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="form_style.css" />
<style>
form{margin:30px;}
</style>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form id="form" method="POST">
	<div class="my-grid-form">
		<div data-row-span="4">
			<div  data-field-span="1">
				<?php echo form_label('Company Name')?>
				<?php echo form_input(array('name'=>'company_name'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('Complete Business Address Line-1')?>
				<?php echo form_input(array('name'=>'address_1'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Complete Business Address Line-2')?>
				<?php echo form_input(array('name'=>'address_2'))?>
			</div>
		</div>
		<div data-row-span='4'>	
			<div data-field-span="1">
				<?php echo form_label('Email')?>
				<?php echo form_input(array('name'=>'email'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Website')?>
				<?php echo form_input(array('name'=>'website'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('GSTIN No.')?>
				<?php echo form_input(array('name'=>'gstin_no'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('Transportation Mode :(apply for supply for goods)')?>
				<?php echo form_input(array('name'=>'transportation_mode'))?>
			</div>
		</div>
		<div data-row-span='3'>
			
			<div data-field-span="1">
				<?php echo form_label('Tax is Payable on Reverse Charge:(yes/no)')?>
				<?php echo form_input(array('name'=>'tax_payable'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Vehicle no.')?>
				<?php echo form_input(array('name'=>'vehicle_no'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Invoice Serial No.')?>
				<?php echo form_input(array('name'=>'invoice_serial_no'))?>
			</div>
		</div>	
		<div data-row-span='4'>
			<div data-field-span="1">
				<?php echo form_label('Date and Time of Supply')?>
				<?php echo form_input(array('name'=>'date_time_of_supply'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('Invoice Date')?>
				<?php echo form_input(array('name'=>'invoice_date'))?>
			</div >
			<div  data-field-span="1">
				<?php echo form_label('Place of Supply')?>
				<?php echo form_input(array('name'=>'place_of_supply'))?>
			</div>
			
		</div>
	<fieldset>	
		<legend>Details of Receiver(Billed to)</legend>
		<div data-row-span='5'>	
			<div  data-field-span="1">
				<?php echo form_label('Name')?>
				<?php echo form_input(array('name'=>'receiver_name'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('Address')?>
				<?php echo form_input(array('name'=>'receiver_address'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('State')?>
				<?php echo form_input(array('name'=>'receiver_state'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('State code')?>
				<?php echo form_input(array('name'=>'receiver_state_code'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('GSTIN No.')?>
				<?php echo form_input(array('name'=>'receiver_gstin_no'))?>
			</div>
		</div>
	</fieldset>	
	<fieldset>
		<legend>Details of Consignee(Shipped to)</legend>
		<div data-row-span='5'>	
			<div  data-field-span="1">
				<?php echo form_label('Name')?>
				<?php echo form_input(array('name'=>'consignee_name'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('Address')?>
				<?php echo form_input(array('name'=>'consignee_address'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('State')?>
				<?php echo form_input(array('name'=>'consignee_state'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('State code')?>
				<?php echo form_input(array('name'=>'consignee_state_code'))?>
			</div>
			<div  data-field-span="1">
				<?php echo form_label('GSTIN No.')?>
				<?php echo form_input(array('name'=>'consignee_gstin_no'))?>
			</div>
		</div>
		</fieldset>
		<fieldset>
			<legend>Shipment Details</legend>
			<div data-row-span='5'>
				<div  data-field-span="1">
					<?php echo form_label('S.NO.')?>
					<?php echo form_input(array('name'=>'s_no'))?>
				</div>
				<div  data-field-span="1">
					<?php echo form_label('Description of Goods')?>
					<?php echo form_input(array('name'=>'goods_description'))?>
				</div>
				<div  data-field-span="1">
					<?php echo form_label('HSN Code(GST)')?>
					<?php echo form_input(array('name'=>'hsn_code_gst'))?>
				</div>
				<div  data-field-span="1">
					<?php echo form_label('Quantity')?>
					<?php echo form_input(array('name'=>'quantity'))?>
				</div>
				<div data-field-span="1">
				<?php echo form_label('UOM')?>
				<?php echo form_input(array('name'=>'uom'))?>
			</div>
			</div>
		</fieldset>
		
		<div data-row-span='4'>
			<div data-field-span="1">
				<?php echo form_label('Rate')?>
				<?php echo form_input(array('name'=>'rate'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Total')?>
				<?php echo form_input(array('name'=>'total'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Discount')?>
				<?php echo form_input(array('name'=>'discount'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Taxable Value')?>
				<?php echo form_input(array('name'=>'taxable_value'))?>
			</div>
		</div>
		<div data-row-span='4'>	
			<div data-field-span="1">
				<?php echo form_label('CGST Rate')?>
				<?php echo form_input(array('name'=>'cgst_rate'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('CGST Amount')?>
				<?php echo form_input(array('name'=>'cgst_amount'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('SGST Rate')?>
				<?php echo form_input(array('name'=>'sgst_rate'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('SGST Amount')?>
				<?php echo form_input(array('name'=>'sgst_amount'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('IGST Rate')?>
				<?php echo form_input(array('name'=>'igst_rate'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('IGST Amount')?>
				<?php echo form_input(array('name'=>'igst_amount'))?>
			</div>
		</div>
		<div data-row-span='5'>	
			<div data-field-span="1">
				<?php echo form_label('Invoice Value(in words)')?>
				<?php echo form_input(array('name'=>'invoice_value'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Total')?>
				<?php echo form_input(array('name'=>'total'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Freight Charges')?>
				<?php echo form_input(array('name'=>'freight_charges'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Loading and Packaging Charges')?>
				<?php echo form_input(array('name'=>'loading_charges'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Insurance Charges')?>
				<?php echo form_input(array('name'=>'insurance_charges'))?>
			</div>
		</div>	
			
		<div data-row-span='5'>	
			<div data-field-span="1">
				<?php echo form_label('Other charges')?>
				<?php echo form_input(array('name'=>'other_charges'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Invoice Total')?>
				<?php echo form_input(array('name'=>'invoice_total'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Certified that above given are true and correct')?>
				<?php echo form_input(array('name'=>'certification'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Electronic Reference Number')?>
				<?php echo form_input(array('name'=>'reference_number'))?>
			</div>
			
		</div>	
		<div data-row-span='4'>	
			<div data-field-span="1">
				<?php echo form_label('Your term and condition of sale')?>
				<?php echo form_textarea(array('name'=>'terms_condition'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Signature')?>
				<?php echo form_input(array('name'=>'signature'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Authorised Signatory Name')?>
				<?php echo form_input(array('name'=>'authorised_name'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Authorised Signatory Designation')?>
				<?php echo form_input(array('name'=>'authorised_designation'))?>
			</div>
		</div>
	</div>	
		<button type='button' value="save" onclick="save()" class="btn btn-primary">Save
			  <!-- works only on button -->	
</form>
</body>
<script>
$(document).ready(function(){
	$.fn.serializeObject = function() {
		var o = {};
		var a = this.serializeArray();
		$.each(a, function() {
			if (o[this.name]) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
	}
});
function save(){
	$.ajax({
		url:'gst_form_controller/get_data',
		type:'POST',
		data:{ mydata:$('#form').serializeObject()},
		dataType:'JSON',
		success:function(data){
			console.log(data);
		},
		error:function(){
			console.log('error');
		}
	});
}

</script>
</html>