<?php 
	//Incluímos la conexión a la base de datos
	require "../config/Conexion.php";
	//Implementamos la clase
	class Ubigeo
	{
		//Implementamos nuestro constructor
		public function __construct()
		{

		}
		
		//Implementamos nuestro método para mostrar departamentos
		public function mostrarDpto()
		{
			$sql="select * from ubigeo where codprov='0' and coddist='0'";
			return ejecutarConsulta($sql);
		}

		//Implementamos nuestro método para mostrar las provincias
		public function mostrarProv($coddpto)
		{
			$sql="select * from ubigeo where coddpto='$coddpto' AND coddist='0' ";
			return ejecutarConsulta($sql);
		}

		//Implementamos nuestro método para mostrar los distritos	
		public function mostrarDist($coddpto,$codprov)
		{
			$sql="select * from ubigeo where coddpto='$coddpto' and codprov='$codprov'";
			return ejecutarConsulta($sql);
		}

	}
?>