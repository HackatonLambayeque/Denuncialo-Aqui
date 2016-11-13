<?php
	session_start();
	require_once "../modelos/Denuncia.php";


$denuncia = new Denuncia();
$idusuario = "1";
$idubigeo = "010000";
$idtipo_denuncia  ="1";
$denunciado ="JUAN RAMOS VARGAS";
$cargo ="Suboficial";
$organismo_implicado = "PNP";
$institucion_nombre = "Policía Nacional del Perú";
$institucion_direccion  ="Los Sauces #555";
$descripcion = "GEGE";
echo $denuncia->add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,$organismo_implicado,
							$institucion_nombre,$institucion_direccion,$descripcion);	