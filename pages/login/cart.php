<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Welcome to Pizza Masters  </title>   <!-- Change the website title Here  -->

	<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

		<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">

	<!--  Linking customized Css files -->
	<link rel="stylesheet" type="text/css" href="../../css/style.css">

	<script type="text/javascript" src="../../js/jquery.js"></script>
</head>
<body style="overflow-y: scroll;" onload="load();">
<div class="row header">
	<div class="col-6   social-media-btn" style="margin-top:5px;padding-left:40px">
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
	
	<div class="col-6 social-media-btn" style="margin-top:13px;padding-right:40px">
			<span class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i> +1 111 111 111</span>
	</div>
	<div class="col-2"></div>
</div>
<div class="row nav-bar">
	<div class="col-12">
			<ul class="nav" id="myTopnav">
			  <li class="brand" ><a style="font-size:34px" href="#brand"> Pizza Masters</a></li>
			  <li class="list"><a href="index.php">Home</a></li>
			  <li class="list"><a href="order.php">Order Online</a></li>
			  <li class="list"><a href="cart.php">Cart</a></li>
			  <li class="list"><a href="../logout.php">Logout</a></li>
			</ul>
	</div>
</div>

<div class="row" >
  <div class="col-4"></div>
  <div class="col-4">
      <table class="table table-striped table-bordered" id="cartlist" style="margin-top:30px;">
      
  </table>
  <div class="col-4"></div>
  </div>

</div>

<script type="text/javascript"> 
function load()
{
  
  var add = document.getElementById("cartlist");
  var length=localStorage.length;
  add.innerHTML="<tr><th>Sno</th><th>Name</th><th>Price</th></tr>"
for (var i=0;i<length;i++)
{
  add.innerHTML += "<tr><td>"+(i+1)+"</td><td> "+ localStorage.getItem(i)+" </td><td>$5</td></tr>";
  if(i==length-1)
  {
    add.innerHTML+="<tr><td></td><td>Total </td><td>$"+length*5+"</td>"
  }
}
}
</script>

</body>
</html>