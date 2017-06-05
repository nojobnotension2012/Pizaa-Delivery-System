<?php





?>
<!DOCTYPE html>
<html>
<head>
	<title> Welcome to Pizza Masters  </title>   <!-- Change the website title Here  -->

	<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!--  Linking Bootstrap Css files -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!--  Linking customized Css files -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

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
			  <li class="list"><a href="pages/Registration.php">Registration</a></li>
			  <li class="list"><a href="pages/login.php">Login</a></li>

			</ul>
	</div>
</div>
<div class="row" style="margin-top: 30px;">
	<div class="col-12 "> <h1 class="text-center ">Welcome</h1></div>

</div>
<div class="row">
	<div class="col-4">
    <div class="thumbnail">
      <img src="img/img1.png" alt="...">
      <div class="caption" style="margin-left: 20px">
        <h3 style="text-align: center;">Mushroom Pizza</h3>
        <p>
        	A very unique Mushroom Pizza, which will delight your palate with its creaminess! This Veg Mushroom Pizza has myriad fascinating toppings like mushrooms and onions seasoned liberally with herbs and spices, which give it a peppy flavour too, but what makes it unique is the addition of cream, which gives a wonderful flavour and mouth-feel. 
        
 
  </div>
</div>

	</div>
	<div class="col-4">
    <div class="thumbnail">
      <img src="img/img2.png" alt="...">
      <div class="caption">
        <h3 style="text-align: center;">Pepperoni Pizza</h3>
        <p>
        	Each pizza is smothered with our special herb-flavored sauce; made from scratch with vine-ripened tomatoes, and topped with thick slices of real, premium pepperoni, and 100% real Mozzarella and Cheddar cheeses. The perfect option for an easy lunch or dinner.        </p>
        
 
  </div>
</div>

	</div>
	<div class="col-4">
    <div class="thumbnail">
      <img src="img/img3.png" alt="...">
      <div class="caption">
        <h3 style="text-align: center;">Special Pizza</h3>
        <p>
        	Each pizza is smothered with our special herb-flavored sauce; made from scratch with vine-ripened tomatoes, and topped with thick slices of real, premium pepperoni, and 100% real Mozzarella and Cheddar cheeses. The perfect option for an easy lunch or dinner        </p>
        
 
  </div>
</div>

	</div>
</div>

<script type="text/javascript">
function load(){

	window.localStorage.clear();
}
</script>
</body>
</html>