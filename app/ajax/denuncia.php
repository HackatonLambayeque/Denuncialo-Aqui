<?php
	session_start();
	require_once "../modelos/Denuncia.php";

	$denuncia = new Denuncia();
	$idusuario = isset($_SESSION["FBID"]) ? ($_SESSION["FBID"]) : ""; 
	
	$idubigeo  = isset($_POST["coddist"]) ? ($_POST["coddist"]) : "";

  	$idtipo_denuncia = isset($_POST["idtipo_denuncia"]) ? ($_POST["idtipo_denuncia"]) : "";
  	$denunciado = isset($_POST["denunciado"]) ? ($_POST["denunciado"]) : "";

  	$cargo = isset($_POST["cargo"]) ? ($_POST["cargo"]) : "";
  	$organismo_implicado = isset($_POST["organismo_implicado"]) ? ($_POST["organismo_implicado"]) : "";
  	
  	$descripcion = isset($_POST["descripcion"]) ? ($_POST["descripcion"]) : "";

	
	switch ($_GET["op"]) {
		
		case 'SaveOrUpdate':
			
			if(empty($iddenuncia))
			{		
				$rspta = $denuncia->add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,
					$organismo_implicado,
					$descripcion);
				echo $rspta ? "Denuncia registrada" : "Denuncia no se pudo registrar";
			}			
			break;

		case "delete":			
				
				$rspta = $denuncia->delete($iddenuncia);
				echo $rspta ? "Denuncia Eliminada" : "Denuncia no se pudo eliminar";
			break;

		case "show":							
				$rspta = $denuncia->show($iddenuncia);
				echo json_encode($rspta);
			break;	

		case "listarTiposDenuncia":
				$rspta = $denuncia->getTiposDenuncias();
				while ($reg = $rspta->fetch_object())
				{
		            echo '<option value=' . $reg->idtipo_denuncia . '>' . $reg->nombre . '</option>';
		        }		
		break;
		case "lista":
				$rspta = $denuncia->getAll();
				while ($reg = $rspta->fetch_object())
				{
		            echo '<div class="col-sm-4" style="padding-top: 80px">
						<div class="card card-signup">
							<form class="form" method="" action="">
								<div class="header header-info text-center">
									<h4>'.$reg->titulo.'</h4>
									 
								</div>
								<p class="text-divider">'.$reg->denunciado.'</p>
								<div class="content">

									<div class="team-player">
			                        <img src="../files/denuncias/'.$reg->imagen.'" alt="Thumbnail Image" class="img-raised img-circle" style="width: 45%"> <!-- FOTO DENUNCIA-->
			                        </br>
			                         </br>
			                        <p class="description">Descripción.</p>
									<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
									<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
									<a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
			                    </div>
								</div>
								<div class="footer text-center">
									<a href="#" class="btn btn-simple btn-info btn-lg">COMENTAR</a>
								</div>
							</form>
						</div>
					</div>';
		        }		
			break;	
	}	
