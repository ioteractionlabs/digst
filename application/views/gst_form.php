<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="./assets/form_style.css" />
	       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>


  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
form{margin:80px;border: 2px solid black; border-radius:3px;
padding:10px;}
#dynamic_table{
	font-size: 12px;
}
.form-control{
	border:1px solid black !important;
	padding-left:2px !important;
}
/*.dz-max-files-reached {
      pointer-events: none;
      cursor: default;
}*/
.dz-progress{display:none;}
th{
	text-align:center !important;
	vertical-align: middle !important;
}
.dz-preview{
	margin-left:160px !important;
}
</style>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	
<form id="form" method="POST">
	<div class="my-grid-form">
		<div data-row-span="4">
			<!-- <div  id='test' data-field-span="1">
					
			</div> -->
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
			<div data-field-span="1">
				<?php echo form_label('Email')?>
				<?php echo form_input(array('name'=>'email'))?>
			</div>
		</div>
		<div data-row-span='5'>	
			
			<div data-field-span="1">
				<?php echo form_label('Website')?>
				<?php echo form_input(array('name'=>'website'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('GSTIN No.')?>
				<?php echo form_input(array('name'=>'gstin_no'))?>
			</div>
			<div  data-field-span="2">
				<?php echo form_label('Transportation Mode :(For goods supply)')?>
				<?php echo form_input(array('name'=>'transportation_mode'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Vehicle no.')?>
				<?php echo form_input(array('name'=>'vehicle_no'))?>
			</div>
		</div>
		<div data-row-span='3'>
			
			<div data-field-span="1">
				<?php echo form_label('Tax is Payable on Reverse Charge:(yes/no)')?>
				<?php echo form_input(array('name'=>'tax_payable'))?>
			</div>
			
			<div data-field-span="1">
				<?php echo form_label('Invoice Serial No.')?>
				<?php echo form_input(array('name'=>'invoice_serial_no'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Date and Time of Supply')?>
				<?php echo form_input(array('name'=>'date_time_of_supply'))?>
			</div>
		</div>	
		<div data-row-span='4'>
			
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
		<div id="add_delete_buttons" style="float:right;">
			<br>

			<button type="button" class="btn btn-primary btn-xs" onclick="add_row()"><i class="fa fa-plus"></i>&nbsp;&nbsp;ADD ROW</button>
			&emsp;
			
			<button type="button" class="btn btn-danger btn-xs" id='del' onclick="delete_row()"><i class="fa fa-trash-o"></i>&nbsp;&nbsp;DELETE ROW</button>
			<br>
		</div>
		<br/><br/>
		
		<table id="dynamic_table" class="table table-striped table-responsive">
				<thead>
					<tr>
						<th colspan='1' rowspan='2'>S.NO.</th>
						<th  colspan='1' rowspan='2'>DESCRIPTION OF GOOD</th>
						<th  colspan='1' rowspan='2'>HSN(CODE)</th>
						<th  colspan='1' rowspan='2'>QUANTITY</th>
						<th  colspan='1' rowspan='2'>UOM</th>
						<th  colspan='1' rowspan='2'>RATE</th>
						<th  colspan='1' rowspan='2'>TOTAL</th>
						<th  colspan='1' rowspan='2'>DISCOUNT</th>
						<th colspan='1' rowspan='2'>TAXABLE VALUE</th>
						<th  colspan='2' rowspan='1'>CGST </th>
						<!-- <th colspan='1' rowspan='2'>CGST AMOUNT</th> -->
						<th colspan='2' rowspan='1'>SGST </th>
					<!-- 	<th colspan='1' rowspan='2'>SGST AMOUNT</th> -->
						<th colspan='2' rowspan='1'>IGST </th>
					<!-- 	<th colspan='1' rowspan='2'>IGST AMOUNT</th> -->
					</tr>
					<tr>
						<th  colspan='1' rowspan='1'>RATE</th>
						<th colspan='1' rowspan='1'>AMOUNT</th>
						<th colspan='1' rowspan='1'>RATE</th>
						<th colspan='1' rowspan='2'> AMOUNT</th>
						<th colspan='1' rowspan='1'>RATE</th>
						<th colspan='1' rowspan='2'>AMOUNT</th>
					</tr>
				</thead>
				<tbody>
					<tr id='data'>
						<input type="hidden" val="" name="hidden_dynamic" id="hidden_dynamic_0">
						<td class="form-group">
							<input type="text" class="form-control-brd" id="tableentry_index_0" name="tableentry_index" value="1" style="text-align: center;" readonly></td>
						<td><input type="text" class="form-control" id="tableentry_description_0" name="tableentry_description"></td>
						<td><input type="text" class="form-control" id="tableentry_hsncode_0" name="tableentry_hsncode"></td>
						<td><input type="text" class="form-control" id="tableentry_quantity_0" name="tableentry_quantity"></td>
						<td><input type="text" class="form-control" id="tableentry_uom_0" name="tableentry_uom"></td>
						<td><input type="text" class="form-control" id="tableentry_rate_0" name="tableentry_rate"></td>
						<td><input type="text" class="form-control" id="tableentry_total_0" name="tableentry_total"></td>
						<td><input type="text" class="form-control" id="tableentry_discount_0" name="tableentry_discount"></td>
						<td><input type="text" class="form-control" id="tableentry_taxable_0" name="tableentry_taxable"></td>
						<td><input type="text" class="form-control" id="tableentry_crate_0" name="tableentry_crate"></td>
						<td><input type="text" class="form-control" id="tableentry_camount_0" name="tableentry_camount"></td>
						<td><input type="text" class="form-control" id="tableentry_srate_0" name="tableentry_srate"></td>
						<td><input type="text" class="form-control" id="tableentry_samount_0" name="tableentry_samount"></td>
						<td><input type="text" class="form-control" id="tableentry_irate_0" name="tableentry_irate"></td>
						<td><input type="text" class="form-control" id="tableentry_iamount_0" name="tableentry_iamount"></td>
					</tr>
				</tbody>
			</table>
		<!-- 	<center>
		<button type="button" class="btn btn-primary btn-sm" onclick="clear_tables()" style="padding-left: 2vw; padding-right: 2vw;"><i class="fa fa-eraser" aria-hidden="true"></i>&nbsp;&nbsp;CLEAR</button>
		&emsp;&emsp;
		<button type="submit" class="btn btn-primary btn-sm"  style="padding-left: 4vw; padding-right: 4vw;"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;	SUBMIT</button>
		
	</center> -->
		</fieldset>
		<fieldset>
			<div data-row-span='6'>	
			<div data-field-span="1" id='test'>
				<?php echo form_label('Invoice Value(in words)')?>
				<?php echo form_input(array('name'=>'invoice_value'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Total')?>
				<?php echo form_input(array('name'=>'invoice_total'))?> 
			</div>
			<div data-field-span="1">
				<?php echo form_label('Freight Charges')?>
				<?php echo form_input(array('name'=>'freight_charges'))?>
			</div>
			<div data-field-span="2">
				<?php echo form_label('Loading and Packaging Charges')?>
				<?php echo form_input(array('name'=>'loading_charges'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Insurance Charges')?>
				<?php echo form_input(array('name'=>'insurance_charges'))?>
			</div>
		</div>	
			
		<div data-row-span='6'>	
			<div data-field-span="1">
				<?php echo form_label('Other charges')?>
				<?php echo form_input(array('name'=>'other_charges'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Invoice Total')?>
				<?php echo form_input(array('name'=>'net_total'))?>
			</div>
			<div data-field-span="2">
				<?php echo form_label('Certified that above given are true and correct')?>
				<?php echo form_input(array('name'=>'certification'))?>
			</div>
			<div data-field-span="2">
				<?php echo form_label('Electronic Reference Number')?>
				<?php echo form_input(array('name'=>'reference_number'))?>
			</div>
			
		</div>	
		<div data-row-span='4'>	
			<div data-field-span="1">
				<?php echo form_label('Your term and condition of sale')?>
				<?php echo form_textarea(array('name'=>'terms_condition'))?>
			</div>
			<!-- <div data-field-span="1">
				<?php echo form_label('Signature')?>
				<?php echo form_input(array('name'=>'signature'))?>
			</div> -->
			<div data-field-span="1">
				<?php echo form_label('Authorised Signatory Name')?>
				<?php echo form_input(array('name'=>'authorised_name'))?>
			</div>
			<div data-field-span="1">
				<?php echo form_label('Authorised Signatory Designation')?>
				<?php echo form_input(array('name'=>'authorised_designation'))?>
			</div>
		</div>

		<fieldset>
		<legend>Upload Image</legend>
		<div data-row-span='2'>
			<div data-field-span='1'>
				<div id='myId' class='dropzone'>
						<?php echo form_label('Logo')?>
						<div id='error'></div>
				</div>
			</div>
			<div data-field-span='1'>	
				<div id='myId1' class='dropzone'>
							<?php echo form_label('Sign')?>
							<div id='error1'></div>
				</div>
			</div>
		</div>
	</fieldset>
	</div>	
		

		<button id='check' type='button' value="save" onclick="save()" class="btn btn-primary">Save</button>
		<div id='check1'>
		</div>
			  <!-- works only on button -->	
</form>
<div class="close_button" id="removeAllImages">Remove All</div>

</body>
<script>
var row_cnt=1;
	var total_1=0;
var total=0;
var img_photo;
var img_sign;
total=total+total_1;
Dropzone.options.myAwesomeDropzone = false;
Dropzone.autoDiscover = false;
var preventDrop = function(e) {
   e.preventDefault();
};
function setEvent(){
	return false;
}
function removeEvent(){
	return false;
}
				       var myDropzone = new Dropzone("div#myId",{ 
				       		url: "http://localhost/ci/index.php/gst_form_controller/get_img",
						    paramName: "file", // The name that will be used to transfer the file
						    maxFilesize: 2, // MB
						    addRemoveLinks: true,
						   maxFiles:1,
						    uploadMultiple: false,
						    thumbnailWidth: "120",
 							thumbnailHeight: "120",
 							dictRemoveFile: "Remove file",
 							dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",
 							dictMaxFilesExceeded: "You can not upload any more files.",
						    accept: function(file, done) {
						 		
						  $('#check').click(function(){
						    		done();
						    	});
						   
				  			},
							init: function() {
								myDropzone = this;
							    this.on("addedfile", function(file,response) { 
							    	console.log(file);
							        document.getElementById('error').innerHTML=file.name;
							   		img_photo=file.name;
							   		
							   		if (file.type == "image/jpeg" || file.type == "image/png" || file.type == "image/jpg"){
							   		
							   		}
							   		else{
							   			// alert('jpeg,png,jpg allowed');
							   			this.removeAllFiles(true);	
							   			this.element.addEventListener('click', this.listeners[1].events.click);
										this.element.addEventListener('drop', this.listeners[0].events.drop);
										this.element.removeEventListener('drop', preventDrop );
							   		}
							   		
							    });
							    // ,
						   //      this.on("success", function(file, response) {
						   //       	console.log(response);
						   //       	console.log(response);
						   //          document.getElementById('error').innerHTML=response;
						   //      }),
						        this.on('drop',function(file){
						        	this.element.removeEventListener('click', this.listeners[1].events.click);
									this.element.removeEventListener('drop', this.listeners[0].events.drop);
									this.element.addEventListener('drop', preventDrop );
						        });
						        
							},
							removedfile: function(file) {
						
							    var _ref;
							    this.removeAllFiles(true); 
							    this.element.addEventListener('click', this.listeners[1].events.click);
										this.element.addEventListener('drop', this.listeners[0].events.drop);
										this.element.removeEventListener('drop', preventDrop );
							    document.getElementById('error').innerHTML='';
							    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
							}
				       	});
						var myDropzone = new Dropzone("div#myId1",{ 
						    url: "http://localhost/ci/index.php/gst_form_controller/get_img",
						  	paramName: "file", // The name that will be used to transfer the file
						  	maxFilesize: 2, // MB
						    addRemoveLinks: true,
						   // autoProcessQueue : false,
						   			   maxFiles:1,
						    uploadMultiple: false,
						    thumbnailWidth: "120",
 							thumbnailHeight: "120",
 							dictRemoveFile: "Remove file",
 							dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",
 							dictMaxFilesExceeded: "You can not upload any more files.",
						    accept: function(file, done) {
						 
							    $('#check').click(function(){
						    		done();
						    	});

						  	},
						  	init: function() {
								myDropzone = this;
							    this.on("addedfile", function(file,response) { 

							        document.getElementById('error1').innerHTML=file.name;
							   		img_sign=file.name;
							   		if (file.type == "image/jpeg" || file.type == "image/png" || file.type == "image/jpg"){
							   		
							   		}
							   		else{
							   			alert('jpeg,png,jpg allowed');
							   			this.removeAllFiles(true);	
							   			this.element.addEventListener('click', this.listeners[1].events.click);
										this.element.addEventListener('drop', this.listeners[0].events.drop);
										this.element.removeEventListener('drop', preventDrop );
							   		}
							   		$('.dz-error-mark').click(function(){
							   			this.removeFile(file);
							   		});
							   		
							    });
						       
							},
							removedfile: function(file) {
						
							    var _ref;
							    this.removeAllFiles(true); 
							     this.element.addEventListener('click', this.listeners[1].events.click);
										this.element.addEventListener('drop', this.listeners[0].events.drop);
										this.element.removeEventListener('drop', preventDrop );
							    document.getElementById('error1').innerHTML='';
							    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
							}
						});
						       
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
	if(row_cnt==1){
		$('#del').prop('disabled',true);
	}
	$('#form').on('focusout','[name="tableentry_crate"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		total_1=($(this).val()*$('#tableentry_taxable_'+last).val())/100;
		totalcal(total_1);
		$('#tableentry_camount_'+last).val(total_1).prop('readonly',true);
	});
	$('#form').on('focusout','[name="tableentry_srate"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		total_1=($(this).val()*$('#tableentry_taxable_'+last).val())/100;
		totalcal(total_1);
		$('#tableentry_samount_'+last).val(total_1).prop('readonly',true);
	});
	$('#form').on('focusout','[name="tableentry_irate"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		total_1=($(this).val()*$('#tableentry_taxable_'+last).val())/100;
		totalcal(total_1);
		$('#tableentry_iamount_'+last).val(total_1).prop('readonly',true);
	});
	
	$('#form').on('focusout','[name="tableentry_rate"]',function(){
	
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		$('#tableentry_total_'+last).val($(this).val()*$('#tableentry_quantity_'+last).val()).prop('readonly',true);
	});
	$('#form').on('focusout','[name="tableentry_discount"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		total_1=$('#tableentry_total_'+last).val()-$(this).val();
		totalcal(total_1);
		$('#tableentry_taxable_'+last).val(total_1).prop('readonly',true);
	});
	$('#form').on('focusout','[name="tableentry_irate"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		// console.log(total);
		// var to=Number($('tableentry_camount_'+last).val())+Number($('tableentry_samount_'+last).val())+Number($('tableentry_iamount_'+last.val()))+Number($("[name='tableentry_taxable']").val());
		$("[name='invoice_total']").val(Number(total)).prop('readonly',true);
	});
	$('#form').on('focusout','[name="other_charges"]',function(){
		var id='#'+$(this).prop('id');
		var last=id.slice(id.length-1);
		var to=Number(total)+Number($("[name='loading_charges']").val())+Number($("[name='freight_charges']").val())+Number($("[name='insurance_charges']").val())+Number($("[name='other_charges']").val());
		$("[name='net_total']").val(Math.round(to)).prop('readonly',true);
	});
});
function totalcal(data){
	total=total+data;
	return false;
}
function save(){
var wholeobject=$('#form').serializeObject();
var table_dynamic={
	tableentry_total:wholeobject.tableentry_total,
	tableentry_index:wholeobject.tableentry_index,
	tableentry_description:wholeobject.tableentry_description,
	tableentry_quantity:wholeobject.tableentry_quantity,
	tableentry_taxable:wholeobject.tableentry_taxable,
	tableentry_iamount:wholeobject.tableentry_iamount,
	tableentry_irate:wholeobject.tableentry_irate,
	tableentry_iamount:wholeobject.tableentry_iamount,
	tableentry_camount:wholeobject.tableentry_camount,
	tableentry_crate:wholeobject.tableentry_crate,
	tableentry_srate:wholeobject.tableentry_srate,
	tableentry_samount:wholeobject.tableentry_samount,
	tableentry_hsncode:wholeobject.tableentry_hsncode,
	tableentry_uom:wholeobject.tableentry_uom,
	tableentry_discount:wholeobject.tableentry_discount,
	tableentry_rate:wholeobject.tableentry_rate,	
};
	$.ajax({
		url:'gst_form_controller/get_data',
		type:'POST',
		data:{ mydata:wholeobject,
				mytable:table_dynamic,
				myvalue:row_cnt,
				photo:img_photo,
				sign:img_sign},
		dataType:'JSON',
		success:function(data){
			console.log(data);
			$('#check1').append("<a href='http://localhost/ci/index.php/gst_form_controller/get_pdf/"+data+"' target=_new>click here</a>");
		},
		error:function(){
			console.log('error');
		}
	});
}
function add_row(){
	row_cnt+=1;
	$('#dynamic_table tr:last').after('<tr><input type="hidden" val="" name="hidden_dynamic" id="hidden_dynamic_'+(row_cnt-1)+'"><td class="form-group"><input type="text" class="form-control-brd" id="tableentry_index_'+(row_cnt-1)+'" name="tableentry_index" value="'+(row_cnt)+'" style="text-align: center;" readonly></td><td><input type="text" class="form-control" id="tableentry_description_'+(row_cnt-1)+'" name="tableentry_description"></td><td><input type="text" class="form-control" id="tableentry_hsncode_'+(row_cnt-1)+'" name="tableentry_hsncode"></td><td><input type="text" class="form-control" id="tableentry_quantity_'+(row_cnt-1)+'" name="tableentry_quantity"></td><td><input type="text" class="form-control" id="tableentry_uom_'+(row_cnt-1)+'" name="tableentry_uom"></td><td><input type="text" class="form-control" id="tableentry_rate_'+(row_cnt-1)+'" name="tableentry_rate"></td><td><input type="text" class="form-control" id="tableentry_total_'+(row_cnt-1)+'" name="tableentry_total"></td><td><input type="text" class="form-control" id="tableentry_discount_'+(row_cnt-1)+'" name="tableentry_discount"></td><td><input type="text" class="form-control" id="tableentry_taxable_'+(row_cnt-1)+'" name="tableentry_taxable"></td><td><input type="text" class="form-control" id="tableentry_crate_'+(row_cnt-1)+'" name="tableentry_crate"></td><td><input type="text" class="form-control" id="tableentry_camount_'+(row_cnt-1)+'" name="tableentry_camount"></td><td><input type="text" class="form-control" id="tableentry_srate_'+(row_cnt-1)+'" name="tableentry_srate"></td><td><input type="text" class="form-control" id="tableentry_samount_'+(row_cnt-1)+'" name="tableentry_samount"></td><td><input type="text" class="form-control" id="tableentry_irate_'+(row_cnt-1)+'" name="tableentry_irate"></td><td><input type="text" class="form-control" id="tableentry_iamount_'+(row_cnt-1)+'" name="tableentry_iamount"></td></tr>');
	if(row_cnt>1){
		$('#del').prop('disabled',false);
	}
}
function delete_row(){
	row_cnt-=1;
	if(row_cnt==1){
		$('#dynamic_table tr:last').remove();
		$('#del').prop('disabled',true);
		
	}
	if(row_cnt>1)
	{
		$('#del').prop('disabled',false);
		
		$('#dynamic_table tr:last').remove();
	}
}
function disp(id){
	$.ajax({
		url:'gst_form_controller/get_pdf/'+id,
		type:'POST',
		dataType:'JSON',
		success:function(data){
			console.log('hello');
			$('#check1').append("");
		},
		error:function(){
			console.log('error');
		}
	});
}
</script>
</html>