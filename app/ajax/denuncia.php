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
	}	
