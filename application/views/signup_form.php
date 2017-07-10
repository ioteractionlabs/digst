<html>
<head>
	<style>
		form{
			border:2px solid black;
			padding:20px;
			margin:20%;
		}
		label{
			display: block;
			margin-right:50px;
		}
	</style>

	</head>
	<body>
		<form id='form1' method='POST'>
			<div><label>Email</label>
			<input type='text' name='' placeholder='' name='email'>
			</div>
			<div>
			<label>Password</label>
			<input type='text' name='' placeholder='' name='password'>
			</div>
			<div>
			<label>Confirm Password</label>
			<input type='text' name='' placeholder='' name='confirm_password'>
			</div>
			<div>
			<label>Business Name</label>
			<input type='text' name='' placeholder='' name='business_name'>
			</div>
			<div>
			<label>Name</label>
			<input type='text' name='' placeholder='' name='user_name'>
			</div>
			<div>
			<label>Business Address-1</label>
			<input type='text' name='' placeholder='' name='address_1'>
			</div>
			<div>
			<label>Business Address-2</label>
			<input type='text' name='' placeholder='' name='address_2'>
			</div>
			<div>
			<label>Website</label>
			<input type='text' name='' placeholder='' name='website'>
			</div>
			<div>
			<label>GST No.</label>
			<input type='text' name='' placeholder='' name='gst_no'>
			</div>
			<div>
			<label>Mobile No.</label>
			<input type='text' name='' placeholder='' name='mobile_no'>
			</div>
		</form>
	</body>
</html>
<script>

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
	$(document).ready(function(){
		var value=$('#form1').serializeObject();
		$.ajax({
			url:
			data:
			dataType:
			method:
			success:function(data){
				console.log(data);
			},
			error:function(jqXHR){
				console.log('error');
			}

		});
	});
</script>