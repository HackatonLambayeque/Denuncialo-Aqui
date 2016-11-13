<?php
	require "../config/Conexion.php";

	class Comentario
	{	

		public function __construct()
		{
			
		}

		public function add($idusuario,$iddenuncia,$descripcion)
		{				
						
			$sql = "INSERT INTO comentario(idusuario,iddenuncia, descripcion)
					VALUES('$idusuario','$iddenuncia', '$descripcion');";
			return ejecutarConsulta($sql);			
		}
		public function getComentarios($iddenuncia)
		{
			$sql = "SELECT 	* from comentario					
					WHERE iddenuncia = '$iddenuncia'";
			return ejecutarConsulta($sql);
		}
		public function getDenuncia($iddenuncia)
		{
						
			
			$sql = "SELECT 	* from denuncia				
					WHERE iddenuncia = '$iddenuncia'";
			return ejecutarConsulta($sql);
		}
	}
