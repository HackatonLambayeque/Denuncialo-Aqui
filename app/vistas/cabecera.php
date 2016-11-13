<!DOCTYPE html>
<html lang="es">
<head>
   <title>Sistema de gestión de ... - GesHotelIT</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Sistema de gestión de ...">
   <meta name="author" content="IESTPChongoyape">

   <!-- agregamos los estilos bootstrap -->
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

   <link rel="stylesheet" type="text/css" href="../assets/css/sb-admin.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">

   <!-- datatables -->
     <link href="../assets/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/datatables/autoFill.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/datatables/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/datatables/colReorder.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" />
    <link href="../assets/datatables/responsive.dataTables.min.css" rel="stylesheet" />

</head>
<body>
<div id="wrapper">
	<!-- navegación inicio -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- cabecera inicio-->
		<div class="nav-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">GesHotelIt</a>
		</div>
		<!-- cabecera fin-->
		<!-- menú superior incio-->
		<ul class="nav navbar-right top-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					Usuario <b class="caret"></b>
				</a>
                    <ul class="dropdown-menu">
                        <li>
                           <a href="#">Cerrar Sesión</a>
                        </li>
                    </ul>				
			</li>
		</ul>
		<!-- menú superior fin-->

		<!-- menú lateral inicia-->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav side-nav">
				<li class="active">
					<a href="#">Escritorio</a>
				</li>
				<li>
					<a href="#">Mantenimientos</a>
				</li>
				<li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo">Ventas <b class="caret"></b></a>
                        <ul id="demo" class="collapse">
                            <li><a href="#">Ventas</a><li>
                            <li><a href="#">Cliente</a><li>
                        </ul>
                </li>
			</ul>
		</div>
		<!-- menú lateral fin-->
	</nav>
	<!-- navegación fin -->