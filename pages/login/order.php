<?php

session_start();
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
		header('location:../login.php');
	}

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
<body style="overflow-y: scroll;">
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
			  <li class="list"><a href="logout.php">Logout</a></li>
			</ul>
	</div>
</div>
<div class="row">
<div class="col-1"></div>
  <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" onclick="add(this.value);" role="button" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img2.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Pepperoni Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
</div>

<form role="form" action="order.php" method="post" >
<div class="row">
<div class="col-1"></div>
  <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
</div>


<div class="row">
<div class="col-1"></div>
  <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
    <div class="col-3">
    <div class="thumbnail">
      <img src="../../img/img1.png" alt="..." height="300px">
      <div class="caption">
        <h3 style="text-align:center">Mushroom Pizza</h3>
        <p style="text-align:center"><button class="btn btn-primary" role="button" onclick="add(this.value);" value="Mushroom Pizza">Add to Cart</button> 
        </div>
    </div>
  </div>
</div>


<script type="text/javascript">
var i=0;
function add(value)
{	
  alert("Added to cart");
	localStorage.setItem(i,value);
	i=i+1;

}


</script>
</body>
</html>