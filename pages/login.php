<?php

	require '../db/database.php';
session_start();
	if ( !empty($_POST)) {

		$username = $_POST['username'];
		$password = $_POST['password'];
			
			$pdo = Database::connect();
			
			$sql="select password from customer where username=?";
			$q=$pdo->prepare($sql);
			$q->execute(array($username));
			$q->setFetchmode(PDO::FETCH_ASSOC);
			$result=$q->fetch();
			if($result['password']==$password)
			{
				    $_SESSION['username']  = $username;
                    $_SESSION['password']  = $password;
				header("Location:login/index.php");
			}
			else
			{

				header("Location:login.php");
				
			}


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
 	<div class="col-3"></div>
        <div class="col-6">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title " style="text-align: center;" >Login </h3>
			 			</div>
			 			<div class="panel-body" style="margin-top: 20px;">
			    		<form role="form" data-toggle="validator" id="regform"  action="login.php" method="post">
			    			<div class="form-group" style="margin-top: 15px">
			    				
			               		<input type="text" name="username" id="username" class="form-control" placeholder="UserName" required>
			                	<div class="form-control-feedback message ">Success! You've done it.</div>
			    			</div>
			    			<div class="form-group" style="margin-top: 15px">
			               		
			               		<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			                	<div class="form-control-feedback message ">Success! You've done it.</div>
			    			</div>
			    			
			    			<input type="submit" value="Login"  class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    		<div class="col-3"></div>
    	</div>



</body>
</html>