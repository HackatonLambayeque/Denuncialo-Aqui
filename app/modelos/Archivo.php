<?php 
	//Incluímos la conexión a la base de datos
	require "../config/Conexion.php";
	//Implementamos la clase
	class Archivo
	{
		//Implementamos nuestro constructor
		public function __construct()
		{

		}
		//Implementamos nuestro método para insertar registros
		public function insertar($iddenuncia,$nombre,$descripcion,$archivo,$tipo)
		{
			//Vamos a declarar una variable para
			//almacenar el código sql
			$sql="INSERT INTO archivo (iddenuncia,nombre,descripcion,archivo,tipo)
			VALUES ('$iddenuncia','$nombre','$descripcion','$archivo','$tipo')";
			//Retornar
			return ejecutarConsulta($sql);

		}
		//Implementamos nuestro método para editar registros
		public function editar($idarchivo,$iddenuncia,$nombre,$descripcion,$archivo,$tipo)
		{
			$sql="UPDATE archivo 
			SET iddenuncia='$iddenuncia',
			nombre='$nombre',
			descripcion='$descripcion',
			archivo='$archivo',
			tipo='$tipo'
			WHERE idarchivo='$idarchivo'";
			return ejecutarConsulta($sql);
		}
		//Implementamos nuestro método para eliminar registros
		public function eliminar($iddenuncia)
		{
			$sql ="DELETE FROM denuncia
			WHERE iddenuncia='$iddenuncia'";
			return ejecutarConsulta($sql);
		}
		//Implementamos nuestro método para mostrar registros
		public function mostrar($iddenuncia)
		{
			$sql="SELECT * FROM denuncia
			WHERE iddenuncia='$iddenuncia'";
			return ejecutarConsultaSimpleFila($sql);
		}
		//Implementamos nuestro método para listar registros
		public function listar()
		{
			$sql="SELECT * FROM archivo";
			return ejecutarConsulta($sql);
		}

	}
?>