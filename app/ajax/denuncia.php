<?php
	session_start();
	require_once "../modelos/Denuncia.php";

	$denuncia = new Denuncia();
	$idusuario = isset($_SESSION["FBID"]) ? ($_SESSION["FBID"]) : ""; 
	
	$idubigeo  = isset($_POST["coddist"]) ? ($_POST["coddist"]) : "";

  	$idtipo_denuncia = isset($_POST["idtipo_denuncia"]) ? ($_POST["idtipo_denuncia"]) : "";
  	$denunciado = isset($_POST["denunciado"]) ? ($_POST["denunciado"]) : "";
  	$titulo = isset($_POST["titulo"]) ? ($_POST["titulo"]) : "";

  	$cargo = isset($_POST["cargo"]) ? ($_POST["cargo"]) : "";
  	$organismo_implicado = isset($_POST["organismo_implicado"]) ? ($_POST["organismo_implicado"]) : "";
  	
  	$descripcion = isset($_POST["descripcion"]) ? ($_POST["descripcion"]) : "";

	
	switch ($_GET["op"]) {
		
		case 'SaveOrUpdate':
		  	////MOVER LA FOTO A LA CARPETA FILES/PACIENTE
			if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name'])) 
			{
				$foto = "";
			}else
			{
				$temp = explode(".", $_FILES["imagen"]["name"]);
				$foto = round(microtime(true)) . '.' . end($temp);		
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../Files/denuncias/" . $foto);
			}			
			if(empty($iddenuncia))
			{		
				$rspta = $denuncia->add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,
					$organismo_implicado,
					$descripcion,$foto,$titulo);
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
		case "listarPasos":
				$rspta = $denuncia->listarPasos($idtipo_denuncia);
				$data = Array();
				while ($reg = $rspta->fetch_object())
				{
					$data[]  = array("0"=>$reg->nombre,
									 "1"=>$reg->descripcion);
				}		
				echo json_encode($data);
		break;
		case "lista":
				$rspta = $denuncia->getAll();
				while ($reg = $rspta->fetch_object())
				{
		            echo '<div class="col-sm-4" style="padding-top:10px;">
						<div class="card card-signup">
							<form class="form" method="" action="">
								<h4><strong>'.$reg->titulo.'</strong></h4>
								<p class="text-divider">'.$reg->denunciado.'</p>
								<div class="content">

									<div class="team-player">
			                        <img src="../files/denuncias/'.$reg->imagen.'" alt="Thumbnail Image" class="img-raised " style="width: 65%"> <!-- FOTO DENUNCIA-->
			                        </br>
			                         </br>
			                        <p class="description">'.$reg->descripcion.'</p>
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
