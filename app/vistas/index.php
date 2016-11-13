<?php
session_start(); 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Denuncia Aquí - Lambayeque</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body class="tutorial-page">
<?php if (isset($_SESSION['FBID'])): ?>      <!--  After user login  -->


 <nav class="navbar navbar-info navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture" alt="Creative Tim Logo" rel="tooltip" title="<b>id:<?php echo  $_SESSION['FBID']; ?></b>   <b><?php echo $_SESSION['FULLNAME']; ?></b> <b><?php echo $_SESSION['EMAIL']; ?></b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    <?php echo $_SESSION['FULLNAME']; ?>
	                </div>


				</div>
	      	</a>
	    </div> 
	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="logout.php">
						<i class="material-icons">dashboard</i> Cerrar Sesión
					</a>
				</li>
				
				 

	    	</ul>
	    </div>
	</div>
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg.jpg');">
		<div class="container" style="text-align: center;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="brand">
						 <img src="assets/img/logden.png" style="width: 80%;"> 
 					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		  

	 

	    <div class="section section-download">
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-8 col-md-offset-2">
	                    <h2>DENUNCIA <strong>&</strong> EDUCA</h2>
	                    <h4>Ingresa y realiza tu denuncia</h4>
	                </div>
	                <div class="row">
						<div class="col-md-6 col-md-offset-3">
	                 <a class="btn btn-danger btn-round btn-lg" href="denuncia.php">
						<i class="fa fa-bullhorn"></i>  DENUNCIAR
					<div class="ripple-container"></div></a>
 					</div>
 					</div>
    	<div id="divdenuncias"></div>

	                
				</div>

				<br><br>

				 
	            </div>

	            
	        </div>
	    </div>

	</div>
    <footer class="footer">
	     
	</footer>
</div>
 <?php else: ?> 
 	<nav class="navbar navbar-info navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    DENUNCIA AQUÍ / LAMBAYEQUE
	                </div>


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="fbconfig.php">
						<i class="fa fa-facebook-square"></i> Inicio de Sesión
					</a>
				</li> 
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg.jpg');">
		<div class="container" style="text-align: center;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="brand">
						 <img src="assets/img/logden.png" style="width: 80%;"> 
 					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		 
 

	 

	    <div class="section section-download">
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-8 col-md-offset-2">
	                    <h2>DENUNCIA <strong>&</strong> EDUCA</h2>
	                    <h4>Ingresa y realiza tu denuncia</h4>
	                </div> 
	                 <div class="row">
						<div class="col-md-6 col-md-offset-3">
	                 <a class="btn btn-danger btn-round btn-lg" href="denuncia.php">
						<i class="fa fa-bullhorn"></i>  DENUNCIAR
					<div class="ripple-container"></div></a>
 					</div>
 					</div>
 					</br></br>
 				<div class="row">

					<!-- Inicio Item de noticias -->

					<div id="divdenuncias"></div>
					<!-- fin Item de noticias -->



					</div>
					</div>
				</div>
 				</div>
				<br><br>

				 
	            </div>

	            
	        </div>
	    </div>

	</div>
    <footer class="footer">
	     
	</footer>
</div>

<!--  End Modal -->

 <?php endif ?>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>
	<script src="denuncia.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();
            if (window_width >= 992){
                big_image = $('.wrapper > .header');
				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}
		});
	</script>
</html>
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help