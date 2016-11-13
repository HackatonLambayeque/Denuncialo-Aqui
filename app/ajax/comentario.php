<?php
	session_start();
	$idusuario = isset($_SESSION["FBID"]) ? $_SESSION["FBID"] : "00000001"; 
	$iddenuncia = isset($_POST["iddenuncia"]) ? $_POST["iddenuncia"] : "0"; 
	$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : ""; 
	
	require_once "../modelos/Comentario.php";
    $comentario = new Comentario();

	switch ($_GET["op"]) {
		case 'SaveOrUpdate':
						
				$rspta = $comentario->add($idusuario,$iddenuncia,$descripcion);
				echo $rspta ? "Comentario registrado" : "Comentario no se pudo registrar";
						
			break;


		case "getComentarios":
				$rspta = $comentario->getComentarios($iddenuncia);
				$data = Array();
				while ($reg = $rspta->fetch_object())
				{
					$data[] = array("0"=>$reg->idcomentario,
								   "1"=>$reg->descripcion);		            
		        }		
		        echo json_encode($data);
		break;
		case "getDenuncia":
				$rspta = $comentario->getDenuncia($iddenuncia);
				$data = Array();
				while ($reg = $rspta->fetch_object())
				{
					$data[] = array("0"=>$reg->iddenuncia,
								   "1"=>$reg->descripcion,
								   "2"=>$reg->denunciado,
								   "3"=>$reg->imagen,
								   "4"=>$reg->organismo_implicado,
								   "5"=>$reg->titulo);		            
		        }		
		        echo json_encode($data);
		break;
		
	}	
