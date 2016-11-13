<?php
	session_start();
	$coddpto = $_POST["coddpto"]; 
	$codprov = $_POST["codprov"]; 
	
	require_once "../modelos/Ubigeo.php";
    $ubigeo = new Ubigeo();

	switch ($_GET["op"]) {
		case "mostrarDpto":
				$rspta = $ubigeo->mostrarDpto();
				while ($reg = $rspta->fetch_object())
				{
		            echo '<option value=' . $reg->coddpto . '>' . $reg->nombre . '</option>';
		        }		
		break;

		case "mostrarProv":
				$rspta = $ubigeo->mostrarProv($coddpto);
				while ($reg = $rspta->fetch_object())
				{
		            echo '<option value=' . $reg->codprov . '>' . $reg->nombre . '</option>';
		        }		
		break;
		case "mostrarDist":
				$rspta = $ubigeo->mostrarDist($coddpto,$codprov);
				while ($reg = $rspta->fetch_object())
				{
		            echo '<option value=' . $reg->idubigeo . '>' . $reg->nombre . '</option>';
		        }		
		break;
	}	
