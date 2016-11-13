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

        <title>Denúncia Aquí - Lambayeque</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/material-kit.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/css/demo.css" rel="stylesheet" />
        <style>
            select {
                font-family: inherit;
                background-color: transparent;
                width: 100%;
                padding: 4px 0;
                font-size: 16px;
                color: rgba(0, 0, 0, 0.26);
                border: none;
                border-bottom: 1px solid rgba(0, 0, 0, 0.12);
            }
            /* Remove focus */
            
            select:focus {
                outline: none;
            }
            /* Hide label */
            
            .mdl-selectfield label {
                display: none;
            }
            /* Use custom arrow */
            
            .mdl-selectfield select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            
            .mdl-selectfield {
                font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
                position: relative;
            }
            
            .mdl-selectfield:after {
                position: absolute;
                top: 0.75em;
                right: 0.5em;
                /* Styling the down arrow */
                width: 0;
                height: 0;
                padding: 0;
                content: '';
                border-left: .25em solid transparent;
                border-right: .25em solid transparent;
                border-top: 0.375em solid rgba(0, 0, 0, 0.12);
                pointer-events: none;
            }
        </style>
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

                                    </br>
                                    </br>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2" style="padding-top: 80px">
                                        <div class="card card-signup">
                                            <form class="form" id="formularioDenuncia" 
                                            name="formularioDenuncia" method="" action=""
                                            enctype="multipart/form-data">
                                                <div class="header header-info text-center">
                                                    <h4>DENUNCIAR</h4>

                                                </div>
                                                <div class="content">
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Título</label>
                                                            <input type="text" id="titulo" name="titulo" class="form-control">
                                                        </div>
                                                    </div>
                                                    </br>
                                                    <div class="team-player">
                                                        <div class="col-sm-12">
                                                            <select id="idtipo_denuncia" name="idtipo_denuncia" 
                                                            class="browser-default" style="color:#000;">                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </br>

                                                    </br>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Denunciado</label>
                                                            <input type="text" id="denunciado" name="denunciado" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Cargo</label>
                                                            <input type="text" id="cargo" name="cargo" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Organismo Implicado</label>
                                                            <input type="text" id="organismo_implicado" name="organismo_implicado"
                                                            class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            
                                                            <textarea id="descripcion" name="descripcion" class="form-control"
                                                            placeholder="descripcion" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <select id="coddpto" name="coddpto" class="browser-default" style="color:#000; margin-top: 15px;">                                                            
                                                        </select>

                                                    </div>

                                                    <div class="col-sm-12">
                                                        <select id="codprov" name="codprov" class="browser-default" style="color:#000;margin-top: 15px;">

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <select id="coddist" name="coddist" class="browser-default" style="color:#000;margin-top: 15px;">
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Imágen</label>
                                                            <input type="file" id="imagen" name="imagen"
                                                            class="form-control">
                                                        </div>
                                                    </div>
                                                    </br>
                                                    </br>

                                                </div>
                                                <div class="footer text-center">
                                                    <button type="submit" class="btn btn-simple btn-info btn-lg">Denunciar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-md-8 col-md-offset-2" style="padding-top: 80px">
                                        <div class="card card-signup">
                                            <form class="form" id="formularioDenuncia" 
                                            name="formularioDenuncia" method="" action=""> 
                                                <div class="content">
                                                    </br>
                                                     
                                                    </br>

                                                    
                                                <table class="table" id="gegewp">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"></th>
                                                            <th>Pasos para realizar tu denuncia Legalmente:</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><span class="label label-info">Paso 1</span></td>
                                                            <td>paso 1</td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                                    </br>

                                                </div> 
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <footer class="footer">

                        </footer>
                    </div>

                    <!--  End Modal -->
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
                            <a href="index.php" >
                                <div class="logo-container">
                                    <div class="logo">
                                        <img src="assets/img/logo.png"  data-placement="bottom" data-html="true">
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

                                    </br>
                                    </br>

                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2" style="padding-top: 80px">
                                        <div class="card card-signup">
                                            <form class="form" id="formularioDenuncia" 
                                            name="formularioDenuncia" method="" action=""
                                            enctype="multipart/form-data">
                                                <div class="header header-info text-center">
                                                    <h4>DENUNCIAR</h4>

                                                </div>
                                                <div class="content">
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Título</label>
                                                            <input type="text" id="titulo" name="titulo" class="form-control">
                                                        </div>
                                                    </div>
                                                    </br>
                                                    <div class="team-player">
                                                        <div class="col-sm-12">
                                                            <select id="idtipo_denuncia" name="idtipo_denuncia" 
                                                            class="browser-default" style="color:#000;">                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </br>

                                                    </br>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Denunciado</label>
                                                            <input type="text" id="denunciado" name="denunciado" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Cargo</label>
                                                            <input type="text" id="cargo" name="cargo" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Organismo Implicado</label>
                                                            <input type="text" id="organismo_implicado" name="organismo_implicado"
                                                            class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            
                                                            <textarea id="descripcion" name="descripcion" class="form-control"
                                                            placeholder="descripcion" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <select id="coddpto" name="coddpto" class="browser-default" style="color:#000; margin-top: 15px;">                                                            
                                                        </select>

                                                    </div>

                                                    <div class="col-sm-12">
                                                        <select id="codprov" name="codprov" class="browser-default" style="color:#000;margin-top: 15px;">

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <select id="coddist" name="coddist" class="browser-default" style="color:#000;margin-top: 15px;">
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Imágen</label>
                                                            <input type="file" id="imagen" name="imagen"
                                                            class="form-control">
                                                        </div>
                                                    </div>
                                                    </br>
                                                    </br>

                                                </div>
                                                <div class="footer text-center">
                                                    <button type="submit" class="btn btn-simple btn-info btn-lg">Denunciar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-md-8 col-md-offset-2" style="padding-top: 80px">
                                        <div class="card card-signup">
                                            <form class="form" id="formularioDenuncia" 
                                            name="formularioDenuncia" method="" action=""> 
                                                <div class="content">
                                                    </br>
                                                     
                                                    </br>

                                                    
                                                <table class="table" id="gegewp">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"></th>
                                                            <th>Pasos para realizar tu denuncia Legalmente:</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><span class="label label-info">Paso 1</span></td>
                                                            <td>paso 1</td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                                    </br>

                                                </div> 
                                            </form>
                                        </div>
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

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>
    <script src="denuncia.js" type="text/javascript"></script>

    <script type="text/javascript">
        $().ready(function() {
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992) {
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>

    </html>