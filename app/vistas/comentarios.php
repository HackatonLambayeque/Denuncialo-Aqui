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
        <?php if (isset($_SESSION['FBID'])): ?>
            <!--  After user login  -->

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
                                        <button class="btn btn-danger btn-round btn-lg">
                                            <i class="fa fa-bullhorn"></i> DENUNCIAR
                                            <div class="ripple-container"></div>
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <br>

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
                                  <div class="col-sm-12" style="padding-top:10px; text-align: center;">
										<div class="card card-signup">
											<div id="comentariosxd" >
                                <h4><strong></strong></h4>
                                <p class="text-divider" id="denunciadoxd"></p>
                                <div class="content">

                                    <div class="team-player">
                                    <img src="../files/denuncias/'.$reg->imagen.'" alt="Thumbnail Image" class="img-raised " style="width: 65%"> <!-- FOTO DENUNCIA-->
                                    </br>
                                     </br>
                                    <p class="description" id="descripcionxd">'.$reg->descripcion.'</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                </div>
                                </div>
												
											</div >
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
                                      <textarea class="form-control" style=" border-style: solid;
									  border-color: #ff0000;   border-top: 1px solid #d0d0d0;
									  border-right: 1px solid #d0d0d0;
									  border-bottom: 1px solid #d0d0d0;
									  border-left: 1px solid #d0d0d0;"
									   placeholder="Comentario" rows="5" id="descripcion" name="descripcion"></textarea>


                                                    </br>
                                                <div class="footer text-center">
                									<button type="submit" id="btnSubmitComentario" class="btn btn-simple btn-info btn-lg">COMENTAR</button>
                								</div>
                                                </div> 
                                                <input type="hidden" name="iddenuncia" id="iddenuncia">
                                            </form>
                                        </div>

                                          <div class="row">
                                   
                                            <form class="form"   method="" action="" style="padding-top: 15px;" id="gegecomentariosxd"> 
                                                
                                            </form>



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
    $("#formularioDenuncia").on("submit",function(e)
    {
        addOrEdit(e);   
    })

    /*
    *Funcion: addOrEdit
    *Para registrar o actualizar un registro en la BD
    */
    function addOrEdit(e)
    {
        e.preventDefault();
        
        var formData = new FormData($("#formularioDenuncia")[0]);

        $.ajax({
            url: "../ajax/comentario.php?op=SaveOrUpdate",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos)
            {                    
                  console.log(datos)       
                   $("#gegecomentariosxd").empty();
                    $.post('../ajax/comentario.php?op=getComentarios',{iddenuncia:iddenuncia},function(r)
                    {            
                       
                        r = JSON.parse(r)
                        //console.log(r[0])
                        for (var i = r.length - 1; i >= 0; i--) {
                            console.log(i)
                            $("#gegecomentariosxd").append("<div class='content'>"+r[i][1]+"</div>")    
                        }
                        
                    })
            }
        });
        limpiar();
    }

        var iddenuncia = location.search.split('id=')[1]

        $("#iddenuncia").val(iddenuncia)
        $.post('../ajax/comentario.php?op=getDenuncia',{iddenuncia:iddenuncia},function(r)
        {            
            r = JSON.parse(r)
            //console.log(r[0])       

            $("#comentariosxd").find("h4").append("strong").text(r[0][5])        
            $("#comentariosxd").find("#descripcionxd").text(r[0][1])        
            $("#comentariosxd").find("img").attr("src","../files/denuncias/"+r[0][3])


            
        })
        $("#gegecomentariosxd").empty();
        $.post('../ajax/comentario.php?op=getComentarios',{iddenuncia:iddenuncia},function(r)
        {            
            r = JSON.parse(r)
            //console.log(r[0])
            for (var i = 0; i < r.length; i++) {
                console.log(i)
                $("#gegecomentariosxd").append(" <div class='col-md-8 col-md-offset-2' style='padding-top:15px; text-align: center;'><div class='card card-signup'><div class='content'>"+r[i][1]+"</div></div></div>")    
            }
            
        })
    </script>

    </html>