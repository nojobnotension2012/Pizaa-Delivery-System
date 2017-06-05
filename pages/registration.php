<?php
	require '../db/database.php';

	if ( !empty($_POST)) {

		$name = $_POST['name'];
		$phonenumber = $_POST['number'];
		$email =$_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];

	
		
		echo "string";
			$pdo = Database::connect();
			
			$sql = "INSERT INTO customer (username,name,email,password,phonenumber,address) values(?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($username,$name, $email,$password,$phonenumber,$address));
			Database::disconnect();
			header("Location:../index.php");


	}	


?>
<!DOCTYPE html>
<html>
<head>
	<title> Welcome to Pizza Masters  </title>   <!-- Change the website title Here  -->

	<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

		<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

	<!--  Linking customized Css files -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/validator.js"></script>

</head>
<body>
<div class="row header">
	<div class="col-6   social-media-btn">
		<span class="pull-left">
			<a  href="">		<!-- Place your facebook page link		-->
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
				</span>
			</a>
			<a  href="">	<!-- Place your twitter link		-->
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
				</span>
			</a>
			<a  href="">	<!-- Place your google plus link		-->
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
				</span>
			</a>
			<a  href="">	<!-- Place your pinterest link		-->
				<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</span>
	</div>
	
	<div class="col-6 social-media-btn">
			<span class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i> +1 111 111 111</span>
	</div>
	<div class="col-2"></div>
</div>
<div class="row nav-bar">
	<div class="col-12">
			<ul class="nav" id="myTopnav">
			  <li class="brand" ><a style="font-size:34px" href="#brand"> Pizza Masters</a></li>
			  <li class="list"><a href="../index.php">Home</a></li>
			  <li class="list"><a href="Registration.php">Registration</a></li>
			  <li class="list"><a href="login.php">Login</a></li>
			  <li class="list"><a href="order.php">Order Online</a></li>
			  <li class="list"><a href="contact.php">Contact Us</a></li>
			</ul>
	</div>
</div>
 <div class="row" style="margin-top: 20px;">
 	<div class="col-4"></div>
        <div class="col-4">
        				<h3 style="margin-top:20px;margin-bottom:20px;text-align:center">Registration form</h3>
			    		<form data-toggle="validator" method="post" action="#">
						
						<div class="form-group" >
							
						
								<label for="Name">Full Name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" Required/>
								</div>
								<div class="help-block with-errors" style="height:10px;"></div>
							
						</div>

						<div class="form-group" >
		
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email" data-error="Email address is invalid" placeholder="Enter your Email" Required/>
								</div>
								<div class="help-block with-errors" style="height:10px;"></div>
							
						</div>

						<div class="form-group" >
		
								<label for="number">Phone Number</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="number" id="number" min-length="10" data-error="Phone Number is invalid" placeholder="Enter your Email" Required/>
								</div>
								<div class="help-block with-errors" style="height:10px;"></div>
							
						</div>

						<div class="form-group">
							
								<label for="username">Username</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" Required/>
								</div>
								<div class="help-block with-errors" style="height:5px;"></div>
							
						</div>

						<div class="form-group" >
							
						
									<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" required class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									
								</div>
								<div class="help-block with-errors" style="height:10px;"></div>
							
						</div>

						<div class="form-group" >
							
								<label for="confirm">Confirm Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm" data-match="#password" data-match-error="Please enter the same password in both the fields"  placeholder="Confirm your Password" Required/>
								</div>
								<div class="help-block with-errors" style="height:10px;"></div>
							
						</div>
						<div class="form-group" >
							
								<label for="Address">Address</label>
			    				<input type="text" name="address" id="Address" class="form-control" placeholder="Address" Required> 
			    				
						</div>
						<div class="form-group " >
					
								<input type="submit" value="Register"  class="btn btn-info btn-block">
							
						</div>
						
					</form>
			    	</div>
	    		</div>
 
    		<div class="col-4"></div>
    	</div>


</body>
</html>