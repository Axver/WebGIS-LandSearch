<?php

	include 'sy_proses/pr_getdatabpn.php';

	session_start();
	if(isset($_SESSION['username']))
	{
		if ($_SESSION['username']!='user')
		{
			header("Location:../index.php");
		}

	}
	else {
		//Do Nothing
	}
	// if (!isset($_SESSION['username'])){
	//
	// echo "<script> alert('Anda Harus Log In Terlebih Dahulu!!'); window.location = '../index.php'; </script>";
	// // header("Location:../index.php");
	// }
	// else
	//  {
	//     if($_SESSION['roleuser']!='user')
	//     {
	//         header("Location: ../index.php");
	//     }
	//  }

	// if($_SESSION['id']=="3")
	// {
	//   header("Location: ../index.php");
	// }
	// else {
	//   header("Location: ../pg_chat/index.php");
	// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js" integrity="sha512-C7BBF9irt5R7hqbUm2uxtODlUVs+IsNu2UULGuZN7gM+k/mmeG4xvIEac01BtQa4YIkUpp23zZC4wIwuXaPMQA==" crossorigin=""></script>
<style >
#mapid {
height: 600px;
}
</style>


<link rel="stylesheet" href="../plugin_swal/sweet-alert.css">
<link rel="stylesheet" href="../plugin_swal/swal-forms.css">

<!-- This is what you need -->
<script src="../plugin_swal/sweet-alert.js"></script>
<script src="../plugin_swal/swal-forms.js"></script>

<script src="../plugin_swal/live-demo.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script src="../fw_leaflet/leaflet-src.js"></script>
<link rel="stylesheet" href="../fw_leaflet/leaflet.css"/>
<script src="../plugin_draw/src/Leaflet.draw.js"></script>
<script src="../plugin_draw/src/Leaflet.Draw.Event.js"></script>
<link rel="stylesheet" href="../plugin_draw/src/leaflet.draw.css"/>
<script src="../plugin_draw/src/Toolbar.js"></script>
<script src="../plugin_draw/src/Tooltip.js"></script>
<script src="../plugin_draw/src/ext/GeometryUtil.js"></script>
<script src="../plugin_draw/src/ext/LatLngUtil.js"></script>
<script src="../plugin_draw/src/ext/LineUtil.Intersect.js"></script>
<script src="../plugin_draw/src/ext/Polygon.Intersect.js"></script>
<script src="../plugin_draw/src/ext/Polyline.Intersect.js"></script>
<script src="../plugin_draw/src/ext/TouchEvents.js"></script>
<script src="../plugin_draw/src/draw/DrawToolbar.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Feature.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.SimpleShape.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Polyline.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Marker.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Circle.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.CircleMarker.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Polygon.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Rectangle.js"></script>
<script src="../plugin_draw/src//edit/EditToolbar.js"></script>
<script src="../plugin_draw/src/edit/handler/EditToolbar.Edit.js"></script>
<script src="../plugin_draw/src/edit/handler/EditToolbar.Delete.js"></script>
<script src="../plugin_draw/src/Control.Draw.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Poly.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.SimpleShape.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Rectangle.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Marker.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.CircleMarker.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Circle.js"></script>
<script>
function biddinghome()
{
swal("Warning!!","Anda harus Login terlebih dahulu untuk menggunakan menu ini");
}
</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>AndaLand</title>

<!-- Bootstrap core CSS -->
<link href="../fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="../fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Plugin CSS -->
<link href="../fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="../fw_bootstrap/css/freelancer.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Image slide -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>


<body id="page-top" style="background-color:#ffffe6;">

<!-- Navigation -->
<nav style="background-color:#f4edbd;" class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
<img class="img-responsive" style="width:200px; height:100px;" href="index.php" src="../fw_bootstrap/img/3.png" alt="" >
<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
Menu
<i class="fa fa-bars"></i>
</button>
<div style="background-color:##664d00; font-family: 'Freestyle Script'; font-size: 20px" class="collapse navbar-collapse" id="navbarResponsive" >
<ul class="navbar-nav ml-auto">
<li class="nav-item mx-0 mx-lg-1">
<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="testsaja()" id='sample1' href="#">Home</a>
</li>
<li class="nav-item mx-0 mx-lg-1">
<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="biddinghome()" href="#">Bidding</a>
</li>
<li class="nav-item mx-0 mx-lg-1">
<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sy_proses/pr_logout.php">Logout</a>
</li>
</ul>
</div>
</div>
</nav>

<!-- Header -->



</header>

<!-- Portfolio Grid Section -->
<section style="margin-left:200px;"class="portfolio" id="portfolio">
<div class="container">



<div class="row">
<div class="col-sm-8">

</div>
<div class="col-sm-4">

<div class="panel panel-info">

<div id="tampillogin" class="panel-body">

</div>

</div>



</div>


</div>
</div>



</div>
</section>



<!-- Footer -->
<footer style="background-color:#664d00;" class="footer text-center">
<div class="container">
<div class="row">
<div class="col-md-4 mb-5 mb-lg-0">
<h4 class="text-uppercase mb-4">Location</h4>
<p class="lead mb-0">Graha Irama lt. 6 suite A - B, Jl. H. R. Rasuna Said No.1-2, RT.6/RW.4
<br>Kuningan Timur, Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
</div>
<div class="col-md-4 mb-5 mb-lg-0">
<h4 class="text-uppercase mb-4">Around the Web</h4>
<ul class="list-inline mb-0">
<li class="list-inline-item">
<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
<i class="fa fa-fw fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
<i class="fa fa-fw fa-google-plus"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
<i class="fa fa-fw fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
<i class="fa fa-fw fa-linkedin"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
<i class="fa fa-fw fa-dribbble"></i>
</a>
</li>
</ul>
</div>
<div class="col-md-4">
<h4 class="text-uppercase mb-4">About Freelancer</h4>
<p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
</div>
</div>
</div>
</footer>

<div class="copyright py-4 text-center text-white">
<div class="container">
<small>Copyright &copy; Your Website 2017</small>
</div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
<i class="fa fa-chevron-up"></i>
</a>
</div>



<!-- Bootstrap core JavaScript -->
<script src="../fw_bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="../fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../fw_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../fw_bootstrap/js/jqBootstrapValidation.js"></script>
<script src="../fw_bootstrap/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../fw_bootstrap/js/freelancer.min.js"></script>




</body>

</html>
