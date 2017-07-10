<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<style type="text/css">
    @page {
            margin: 10px 10px 10px 10px;
        }
		.text{
			color: #663A85;
			margin-top: 0px;
		}
		.main-box{
			height: 1130px; 
			width: 893px; 
			border: solid; 
			border-width: 3px; 
			border-color: #663A85;
			margin: auto
		}
		.logo-box{
			height: 135px; 
			width: 135px; 
			border: solid; 
			border-width: 0px 2px 2px 0px; 
			border-color: #663A85;
			float: left;
		}
		.logo-temp{
			position: relative;
			top: 50px;
			left: 45px;
		}
		.business-info-box{
			height: 135px;
			width: 760px;
			border: solid;
			border-width: 0px 0px 2px 0px;
			border-color: #663A85;
			position: relative;
			left: 135px;
		}
        .business-info-box p{
            position: relative; 
            right: 70px;
        }
		.gst-info-box{
			height: 70px;
			width: 487px;
			border: solid;
			border-color: #663A85;
			border-width: 0px 2px 2px 0px;
			float: left;
			
		}
		.smaller-text{
			font-size: 12px;
			margin-top: 0px;
			margin-bottom: 0px;
			width: auto;
			float: left;
			color: #663A85;
		}
        .company-address-text{
            font-size: 12px;
            position: relative;
            bottom: 10px;
        }
		.transport-info{
			height: 70px;
			width: 408px;
			border: solid;
			border-color: #663A85;
			border-width: 0px 0px 2px 0px;
			position: relative;
			left: 488px;
		}
		.transport-box-text{
			margin-bottom: 0px; 
			margin-top: 0px; 
			font-size: 12px; 
			display: inline;
			color: #663A85;
		}
        #details-of-receiver-billed-to-banner{
            background-color: #E6E0EC;
            height: 14px;
            width: 416px;
            border: solid;
            border-color: #663A85;
            border-width: 0px 2px 2px 0px;
            float: left;
        }
        #details-of-consignee-shipped-to-banner{
            background-color: #E6E0EC;
            height: 14px;
            width: 476px;
            border: solid;
            border-color: #663A85;
            border-width: 0px 2px 2px 0px;
            position: relative;
            left: 418px;
        }
        .lower-banner-left{
            background-color: #E6E0EC;
            height: 14px;
            padding:20px;
            width: 458px;
            border: solid;
            border-color: #663A85;
            border-width: 0px 2px 2px 0px;
            float: left;
        }
       
        .lower-banner-right{
            background-color: #E6E0EC;
            height: 14px;
            width: 434px;
            border: solid;
            border-color: #663A85;
            border-width: 0px 2px 2px 0px;
            position: relative;
            left: 460px
        }
        #authorised-signatory-banner{
            color: #663A85;
            font-size: 15px;
            background-color: #E6E0EC;
            height: 14px;
            width: 434px;
            border: solid;
            border-color: #663A85;
            border-width: 2px 2px 2px 2px;
            position: relative;
            left: 458px;
            top:34px;
        }
    #details-of-receiver-billed-to-banner-text{
        font-size: 12px; 
        color: #663A85;
        margin-bottom: 0px; 
        margin-top: 0px
    }

    #details-of-receiver-billed-to-banner-text b{
        position: relative; 
        left: 24%;
    }
    #details-of-consignee-shipped-to-banner-text{
        font-size: 12px;
        color: #663A85; 
        margin-bottom: 0px; 
        margin-top: 0px
    }
    #details-of-consignee-shipped-to-banner-text b{
        position: relative; 
        bottom: 16px; 
        display: inline-block;
    }
    #authorised-signatory-banner-texts b{
        position: relative; 
        bottom: 17px; 
        display: inline-block;
    }
    .transport-info span{
        position: relative; 
        bottom: 73px; 
        right: -5px;
    }
    .total-row{
        border:solid;
        background-color: #E6E0EC;
    }
    .particulars-certified-box{
        height: 70px;
        width: 458px;
        border: solid;
        border-color: #663A85;
        border-width: 0px 2px 2px 0px;
        float: left;
    }
    .electronic-reference-number-box{
        height: 70px;
        width: 435px;
        border: solid;
        border-color: #663A85;
        border-width: 0px 0px 2px 0px;
        position: relative;
        left: 460px;
    }
    .electronic-reference-number-box span {
        position: relative;
        bottom: 73px;
        right: -5px;
    }
    #signature-box{

        float: right;
        border: solid;
        border-color: #663A85;
        border-width: 0px 0px 0px 2px;
        color: #663A85;
        font-size: 12px;
        position: relative;
        right: 186px;
    }
    #signatory-box{
        float: right;
        border: solid;
        border-color: #663A85;
        border-width: 0px 0px 2px 2px;
        color: #663A85;
        font-size: 12px;
        position: relative;
        right: -253px;
        top: 33px;
        width: 437px
    }
    tr{
        margin:0px;
        
    }
    th{
        border: solid;
        border-color: #663A85;
        font-size:12px;
        color: #663A85;
        background-color: #E6E0EC;
    }
    td{  
        color: #663A85;
        margin:0px;
        font-size: 12px;
        line-height: 15px;
    }
    .logo1{
        border:solid;
        border-width: 0px 1px 0px 1px;
        
        border-color: #663A85;
    }
    .logo12{
        background-color: #E6E0EC;
        border:solid;
        border-width: 1px 1px 1px 1px;
        border-color: #663A85;
    }
    table{
     border:solid;
     border-spacing: 0px;
    border-collapse: none;
        border-width: 1px 1px 1px 1px;
        border-color: #663A85;   
    }
    .invoice-table-data{
        color: #663A85;
        text-align: right;
        border:solid;
        border-width: 1px 1px 1px 1px;
        border-color: #663A85;
        font-size: 12px;
    }
    #table1 td{
        text-align:center;
    }
     .tdclass{
            background-color: #E6E0EC;
            padding:10px;
            text-align: center;
            border: solid;
            border-color: #663A85;
            border-width: 2px 2px 2px 2px;
        }
       .tdclass1{
        border: solid;
            border-color: #663A85;
            border-width: 1px 1px 1px 1px;
        padding:20px;
        text-align: center;
       } 
   thead>tr {
   line-height:500px !important;
    }
   /* .here tr:nth-child(2){
        background-color: red;
        padding:100px;
    }*/
    #imga{
        width:150px;
    }
	</style>
</head>
<body>
    <?php $a= $image.$form->photo;?>

	<div class="main-box">
    <table width='100%' id='table1'>    
		<tr>
            <td rowspan='6' class='logo1' id='imga'>
               <img src= 'check.png'  alt="LOGO" />
            </td>
            <td><b>COMMON INVOICE</b><br /></td>
        </tr>
        <tr>
            <td><b><?php echo $form->company_name?></b><br /></b>
            </td>
        </tr>
        <tr>
            <td><b><?php echo $form->address_1?> <br/></b>
            </td>
        </tr>
        <tr>
            <td><b><?php echo $form->address_2?> <br/></b>
            </td>
        </tr>
        <tr>
            <td><b><u class="company-contact-email-text"><?php echo $form->email?></u></b>
            </td>
        </tr>
        <tr>
            <td><b><u class="company-website-text"><?php echo $form->website?></u></b>
            </td>
        </tr>

    </table>

<table width='100%'>
		<tr >
            <td width='65%'  class='logo1'>Your Gst Number:<span id="gst-number"><?php echo $form->gstin_no?></span></td>
		          <td width='35%' >Transportation Mode: <span id="transportation-mode"><?php echo $form->transportation_mode?></span></td>
        	
		</tr>
        <tr>	
            <td width='65%'  class='logo1'>Tax payable on reverse charge (Yes/No):<span id="gst-tax-payable"><?php echo $form->tax_payable?></span></td>
            <td width='35%'>Veh No: <span id="vehicle-no"><?php echo $form->vehicle_no?></span></td>
            
			
		</tr>
        <tr >
		      <td width='65%'  class='logo1'>Your Invoice serial number:<span id="gst-invoice-serial-no"><?php echo $form->invoice_serial_no?></span></td>
			 <td width='35%'>Date & Time of Supply: <span id="date-time-ofsupply"><?php echo $form->date_time_of_supply?></span></td>	
		</tr>
        <tr >		
                <td width='65%'  class='logo1'>Your invoice date:<span id="gst-invoice-date"><?php echo $form->invoice_date?></span></td>    
				<td width='35%'>Place of supply: <span id="place-ofsupply"><?php echo $form->place_of_supply?></span></td>
		</tr>
</table>	
<table width='100%'>	
        <tr> 
            <td class='tdclass'><b>Details of Receiver (Billed to)</b></td>
            <td class='tdclass'><b>Details of Consignee (Shipped to)</b></td>
        </tr>
        <tr>
            <td class='logo1'>Name:<span id="receiver_name"></span><?php echo $form->receiver_name?></td>
            <td>Name:<span id="consignee_name"></span><?php echo $form->consignee_name?><td/>
        </tr>
        <tr>
               <td class='logo1'>Address:<span id="receiver_address"><?php echo $form->receiver_address?></span><td/>
            <td>Address:<span id="consignee_address"><?php echo $form->consignee_address?></span><td/>
        </tr>
        <tr>
            <td  class='logo1'>State :<span id="receiver_state"><?php echo $form->receiver_state?></span><td/>
                        <td>State :<span id="consignee_state"><?php echo $form->consignee_state?></span><td/>
        </tr>
        <tr>
                <td  class='logo1'>State Code:<span id="receiver_state_code"><?php echo $form->receiver_state_code?></span><td/>
                                <td>State Code:<span id="consignee_state_code"><?php echo $form->consignee_state_code?></span><td/>
        </tr>
        <tr>
            <td  class='logo1'>GSTIN Number:<span id="receiver_gstin_no"><?php echo $form->receiver_gstin_no?></span><td/>
            <td>GSTIN Number:<span id="consignee_gstin_no"><?php echo $form->consignee_gstin_no?></span><td/>
        </tr>
        
</table>     
<?php $count=15;?>   
        <table class='here'>
            <thead>
                <tr>
                    <th rowspan="2">S. no</th>
                    <th rowspan="2" >Description of Goods</th>
                    <th rowspan="2">HSN Code</th>
                    <th rowspan="2">Qty</th>
                    <th rowspan="2">UOM</th>
                    <th rowspan="2">Rate</th>
                    <th rowspan="2">Total</th>
                    <th rowspan="2">Discount</th>
                    <th rowspan="2">Taxable Value</th>
                    <th colspan="2">CGST</th>
                    <th colspan="2">SGST</th>
                    <th colspan="2">IGST</th>
                </tr>
                <tr>
                    <th> Rate </th>
                    <th> Amount </th>
                    <th> Rate </th>
                    <th> Amount </th>
                    <th> Rate </th>
                    <th> Amount </th>
                </tr>
            </thead>

            <tbody class='check'>
                <?php foreach($table as $row) { ?>
                    <tr>
                        <td class='logo1'><?php echo $row->tableentry_index;?></td>
                        <td class='logo1'><?php echo $row->tableentry_description;?></td>
                        <td class='logo1'><?php echo $row->tableentry_hsncode;?></td>
                        <td class='logo1'><?php echo $row->tableentry_quantity;?></td>
                        <td class='logo1'><?php echo $row->tableentry_uom;?></td>
                        <td class='logo1'><?php echo $row->tableentry_rate;?></td>
                        <td class='logo1'><?php echo $row->tableentry_total;?></td>
                        <td class='logo1'><?php echo $row->tableentry_discount;?></td>
                        <td class='logo1'><?php echo $row->tableentry_taxable;?></td>
                        <td class='logo1'><?php echo $row->tableentry_crate;?></td>
                        <td class='logo1'><?php echo $row->tableentry_camount;?></td>
                        <td class='logo1'><?php echo $row->tableentry_srate;?></td>
                        <td class='logo1'><?php echo $row->tableentry_samount;?></td>
                        <td class='logo1'><?php echo $row->tableentry_irate;?></td>
                        <td class='logo1'><?php echo $row->tableentry_iamount;?></td>
                        </tr>';   
                    <?php $count=$count-1; ?>
                  <?php  }?>
                  <?php $z=''?>
                  <?php for ($i=0;$i<12;$i++){
        
                  echo "<tr>
                        <td class='logo1'>&nbsp;</td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                        <td class='logo1'></td>
                    </tr>";
                }  
                ?>

                <tr>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'></td>
                    <td class='logo12'>
                         <?php $a=0 ?>
                         <?php  foreach($table as $row) { ?>
                       
                    
                       <?php $a=$a+$row->tableentry_camount;?>

                        <?php   }?>
                        <?php echo $a;?>
                    </td>
                    <td class='logo12'></td>
                    <td class='logo12'>
                        <?php $a=0 ?>
                         <?php  foreach($table as $row) { ?>
                       
                    
                       <?php $a=$a+$row->tableentry_samount;?>

                        <?php   }?>
                        <?php echo $a;?>
                    </td>
                    <td class='logo12'></td>
                    <td class='logo12'>
                        <?php $a=0 ?>
                         <?php  foreach($table as $row) { ?>
                       
                    
                       <?php $a=$a+$row->tableentry_iamount;?>

                        <?php   }?>
                        <?php echo $a;?>
                    </td>
                </tr>
                }?>
            </tbody>
        <!-- </table>
        <table width="100%"> -->
            <thead>
                <tr>
                    <th colspan='9'>Invoice Value (in Words)</th>
                    <th colspan="5" style='text-align:right'>Total</th>
                    <th style='text-align:right'>Rs. <?php echo $form->grand_total?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="5" colspan='9' class='tdclass1'><?php echo $form->invoice_value?></td>
                    <td colspan="5" class="invoice-table-data">Freight Charges</td>
                    <td class="invoice-table-data">Rs. <?php echo $form->freight_charges?> </td>    
                </tr>
                <tr>
                    <td colspan="5" class="invoice-table-data">Loading and Packing Charges</td>
                    <td class="invoice-table-data">Rs. <?php echo $form->loading_charges?> </td>    
                </tr>
                <tr>
                    <td class="invoice-table-data"  colspan="5">Insurance Charges</td>
                    <td class="invoice-table-data"> Rs. <?php echo $form->insurance_charges?></td>    
                </tr>
                <tr>
                    <td class="invoice-table-data"  colspan="5">Other Charges</td>
                    <td class="invoice-table-data"> Rs. <?php echo $form->other_charges?> </td>    
                </tr>
                <tr>
                    <td class="invoice-table-data"  style="background-color: #E6E0EC;" colspan="5">Invoice total</td>
                    <td class="invoice-table-data"  style="background-color: #E6E0EC;">Rs. <?php echo $form->invoice_total?> </td>    
                </tr>
                <tr>
                    <td colspan='9' class='logo12'>Amount of Tax subject to Reverse Charge</td>
                    <td class='logo12'> - </td>
                    <td class='logo12'>Rs. - </td>
                    <td class='logo12'>Rs. - </td>
                    <td class='logo12'>Rs. - </td>
                    <td class='logo12'>Rs. - </td>
                    <td class='logo12'>Rs. - </td>
                </tr>
            </tbody>
        </table>

        <table width='100%'>
            <tr>
                <td class='tdclass' width="59.7%" ><b>Certified that the particurals given below are true and correct</b></td>
                <td class='tdclass' width="40.3%"><b>Electronic Reference Number</b></td>
            </tr>
            <tr >
                <td class='tdclass1'><?php echo $form->certification?></td>
                <td class='tdclass1'><?php echo $form->reference_number?></td>
            </tr>      
        </table>

        <table width='100%'>
            <tr>
                <td class='tdclass' width="59.7%"><b>YOUR TERMS AND CONDITIONS OF SALE</b></td>
                <td class='tdclass' width="40.3%"><b><?php echo $form->company_name?></b></td>
            </tr>
            <tr>
                <td rowspan='3' class='tdclass1'><?php echo $form->terms_condition?></td>
                <td class='tdclass1'>&nbsp;&nbsp;&nbsp;Signature: <img src='http://localhost/ci/hello_logo_hero1.jpg'  alt="Smiley face" height="60" width="140"></img></td>
            </tr>
            <tr>
                
                <td class='tdclass' width="40%"><b>Authorised Signatory</b></td>
            </tr>
            <tr>
                
                <td class='tdclass1'><span>Name: <?php echo $form->authorised_name?></span><br/><span>Designation: <?php echo $form->authorised_designation?> <br/></td>
            </tr>  
    </table>
	</div>
</body>
</html>
<style type="text/css">

</style>
