<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php include ('includes/config.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<!-- Latest compiled Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Style sheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Google font API -->
<link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

<!-- Reset CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/4ab730f0d1.js"></script>

<!--Smooth page Scroll-->
        <script src="js/smoothPageScroll.js"></script>
      	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>


<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>

<!--parallax Scrolling-->
	<script src="js/jquery.stellar.min.js"></script>  

<script>

	webshims.setOptions('forms-ext', {types: 'date'});
	webshims.polyfill('forms forms-ext');
	$.webshims.formcfg = {
	en: {
	    dFormat: '-',
	    dateSigns: '-',
	    patterns: {
	        d: "dd-mm-yy"
	    }
	}

	};

</script>


</head>

<body>
		<div class="top-bar-main">
			<div class="container" >
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="top-bar">
							<h4 style="float:left;"><i style="color:#fff; font-size: 30px;" class="fa fa-home" aria-hidden="true"></i> &nbsp <span style="color:#fff;">Address</span> &nbsp&nbsp <span style="font-size:18px;">8901 MARMORA ROAD, GLASGOW, D04 89GR.</span></h4>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="top-bar">
							<h4><i style="color:#fff; font-size: 30px;" class="fa fa-mobile" aria-hidden="true"></i>&nbsp <span style="color:#fff;">Call Us 24 HOUR</span> &nbsp&nbsp <span style="font-size:20px;">800 666 7777</span> </h4>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="nav-bar">				
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div id="logo"></div>
					</div>
						
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<div class="toggle-div">
							<img id="toggle-icon" class="toggle-btn" src="images/menu-icon3.png">
						</div>
						<div  class="nav-menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="map.php">Find Your Route</a></li>
								<li><a href="#">Price</a></li>
								<li><a href="#">About Us</a></li>
								<!-- <li><a href="#">Log in</a></li> -->
								<li><button class="account-btn" onclick="location.href='signin.php'" >Sign In</button></li>
							</ul>
						</div>	
					</div>

				</div>
			</div>
		</div>

	
<!-------------------Toggle Navigation---------------->


<script>
	jQuery(document).ready(function() {
		
	jQuery("#toggle-icon").click(function() {
		
		jQuery(".nav-menu").slideToggle(300, function() {
			jQuery(this).toggleClass("nav-menu-expended").css('display', '');
		});;
	});
	
});
	
</script>


<!-------------------Toggle Navigation end---------------------->


<script type="text/javascript">

$(document).ready(function() {
  
  $(window).scroll(function () {
      
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 40) {
      $('#nav-bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 40) {
      $('#nav-bar').removeClass('navbar-fixed');
    }

  });
});

</script>

<script type="text/javascript">
	$.stellar();
</script>