<?php 
require_once "../modelos/Archivo.php";

//Vamos a crear un objeto que haga 
//referencia al modelo
$archivo=new Archivo();

//Recibimimos todos los objetos del formulario
$idarchivo=isset($_POST["idarchivo"])?limpiarCadena($_POST["idarchivo"]):"";
$iddenuncia=isset($_POST["iddenuncia"])?limpiarCadena($_POST["iddenuncia"]):"";
$nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$archivo=isset($_POST["archivo"])?limpiarCadena($_POST["archivo"]):"";
$tipo=isset($_POST["tipo"])?limpiarCadena($_POST["tipo"]):"";

//Evaluamos ahora la operación que desea realizar
switch($_GET["op"]){
 case 'guardaryeditar':
 		//si el id esta vacío vamos a registrar
 		if (empty($idarchiv)){
 			$rspta=$archivo->insertar($iddenuncia,$nombre,$descripcion,$archivo,$tipo);

 			echo $rspta ? "Archivo Registrado" : "Archivo no se pudo registrar";
 		}
 		else{
 			$rspta=$archivo->editar($idarchivo,$iddenuncia,$nombre,$descripcion,$archivo,$tipo);

 			echo $rspta ? "Archivo Actualizado" : "Archivo no se pudo actualizar";
 		}
 		break;

 case 'eliminar':
 		$rspta=$archivo->eliminar($idarchivo);
 		echo $rspta ? "Archivo Eliminado" : "Archivo no se puede eliminar";

 		break;

 case 'mostrar':
 		$rspta=$archivo->mostrar($idarchivo);
 		//Codificar el resultado utilizando
 		echo json_encode($rspta);
 		break;

 case 'listar':
 		$rspta=$archivo->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		//Recorremos todos los valores obtenidos
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
	 			"0"=>$reg->idarchivo,
	 			"1"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idarchivo.')"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger" onclick="eliminarFila('.$reg->idarchivo.')"><i class="fa fa-trash"></button>',
	 			"2"=>$reg->nombre,
	 			"3"=>$reg->descripcion,
	 			"4"=>$reg->tipo
 			);
 		}
 		$results = array(
 			"sEcho"=>1,
 			"iTotalRecords"=>count($data),
 			"iTotalDisplayRecords"=>count($data),
 			"aaData"=>$data);

 			echo json_encode($results);
 		break;
}

?>