<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
form{
	/*margin:100px;*/
	border:3px solid black;
	padding:20px;
	padding-bottom: 0px;
	background: white;
	width:200px;
	box-shadow: 10px 10px 5px #888888;
	border-radius: 3px;
	margin-left: 39%;
}
div{
	padding:10px;
}
h4,h5{
	text-align: center;
	padding:10px;
}
.panel-footer{
	height:92%;
}

.panel-primary{
	height:100%;
	max-width: 80%;
	margin: 0 auto;
	overflow: visible;
	padding-bottom: 0px;
}
body{
	height:100%;
}
</style>
</head>
<body>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h1 class="panel-title">DiGST</h1>
  </div>
  <div class="panel-footer">
  	<h4> Are You Ready to Digitize your GST invoices with us?</h4>
   	<form>
   		<div>
		<label>Email</label>
		<input type='text' name='username' placeholder='Enter email'>
		</div>
		<div>
		<label>Password</label>
		<input type='password' name='password' placeholder='Enter password'>
		</div>
		<div>
		<p>Forget password ?</p>
		<input type='submit' value='Login' name='submit' class="btn btn-primary  btn-block">
	</div>
	</form>
		<h5>New to us? <a href='signup_form.php'>Sign up</h5>
  </div>
</div>
</body>
</html>
