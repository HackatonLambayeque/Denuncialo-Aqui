<?php
	session_start();
	require_once "../modelos/Denuncia.php";

	$denuncia = new Denuncia();
	$idusuario = isset($_POST["idusuario"]) ? cleanString($_POST["idusuario"]) : ""; 
	$idubigeo  = isset($_POST["idubigeo"]) ? cleanString($_POST["idubigeo"]) : "";  
  	$idtipo_denuncia = isset($_POST["idtipo_denuncia"]) ? cleanString($_POST["idtipo_denuncia"]) : "";
  	$denunciado = isset($_POST["denunciado"]) ? cleanString($_POST["denunciado"]) : "";

  	$cargo = isset($_POST["cargo"]) ? cleanString($_POST["cargo"]) : "";
  	$organismo_implicado = isset($_POST["organismo_implicado"]) ? cleanString($_POST["organismo_implicado"]) : "";
  	$institucion_nombre = isset($_POST["institucion_nombre"]) ? cleanString($_POST["institucion_nombre"]) : "";
  	$institucion_direccion = isset($_POST["institucion_direccion"]) ? cleanString($_POST["institucion_direccion"]) : ""
  	$descripcion = isset($_POST["descripcion"]) ? cleanString($_POST["descripcion"]) : "";

	
	switch ($_GET["op"]) {
		
		case 'SaveOrUpdate':
			
			if(empty($iddenuncia))
			{		
				$rspta = $denuncia->add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,
					$organismo_implicado, $institucion_nombre,$institucion_direccion,
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
		
	}	
