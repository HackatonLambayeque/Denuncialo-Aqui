<?php
session_start(); 
?>
<?php 

require_once "../modelos/Grafico.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Denúncia Aquí - Lambayeque</title>

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
 				<div class="row">

					<!-- Inicio de graficos -->
					<div class="col-lg-6">
						<h5><strong>Denuncias por Ubicación</strong></h5>
						<canvas id="chUbigeo" width="300" height="200"></canvas>
					</div>
					<div class="col-lg-6">
						<h5><strong>Denuncias por Tipo</strong></h5>
						<canvas id="chTipo" width="300" height="200"></canvas>
					</div>
					<!-- fin de graficos -->



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
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
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
 				<div class="row">

					<!-- Inicio de graficos -->
					<div class="col-lg-6">
						<h5><strong>Denuncias por Ubicación</strong></h5>
						<canvas id="chUbigeo" width="300" height="200"></canvas>
					</div>
					<div class="col-lg-6">
						<h5><strong>Denuncias por Tipo</strong></h5>
						<canvas id="chTipo" width="300" height="200"></canvas>
					</div>
					<!-- fin de graficos -->



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
	<?php
    $obj = new Grafico();
    $query_etiquetaubigeo = $obj->listaUbigeo();
    $query_cantidadubigeo = $obj->listaUbigeo();

    $query_etiquetatipo = $obj->listaTipo();
    $query_cantidadtipo = $obj->listaTipo();     
    ?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
	<script>
		var ctx = document.getElementById("chUbigeo");
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: [<?php while ($reg_etiquetaubigeo= $query_etiquetaubigeo->fetch_object()) {
		                       echo '"'.$reg_etiquetaubigeo->nombre.'",';
		                }?>],
		        datasets: [{
		            label: 'Ubicacion',
		            data: [<?php while ($reg_cantidadubigeo= $query_cantidadubigeo->fetch_object()) {
		                       echo ''.$reg_cantidadubigeo->total.',';
		                }?>],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)',
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)',
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});


		var ctx2 = document.getElementById("chTipo");
		var myChart2 = new Chart(ctx2, {
		    type: 'polarArea',
		    data: {
		        labels: [<?php while ($reg_etiquetatipo= $query_etiquetatipo->fetch_object()) {
		                       echo '"'.$reg_etiquetatipo->nombre.'",';
		                }?>],
		        datasets: [{
		            label: 'Tipo Denuncias',
		            data: [<?php while ($reg_cantidadtipo= $query_cantidadtipo->fetch_object()) {
		                       echo ''.$reg_cantidadtipo->total.',';
		                }?>],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)',
		                'rgba(255, 99, 132, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)',
		                'rgba(255,99,132,1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
</script>

</html>

Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help