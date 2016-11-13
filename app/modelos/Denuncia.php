<?php
	require "../config/Conexion.php";

	class Denuncia
	{	

		public function __construct()
		{
			
		}

		public function add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,$organismo_implicado,$descripcion)
		{				
			if ( trim($idusuario) == "" )
			{
				$idusuario = "00000001";
			}
			$sql = "SELECT idusuario FROM users
					WHERE Fuid = '$idusuario'";
			$idusuario =  ejecutarConsultaSimpleFila($sql);
			$idusuario = $idusuario["idusuario"];
			$sql = "INSERT INTO denuncia(idusuario, idubigeo, idtipo_denuncia, denunciado,
								cargo, organismo_implicado,
								fecha, hora, descripcion,estado)
					VALUES('$idusuario','$idubigeo','$idtipo_denuncia','$denunciado',
						   '$cargo','$organismo_implicado', now(),TIME(now()),
						   '$descripcion','1');";
			return ejecutarConsulta($sql);			
		}
			
		public function delete($iddenuncia)
		{
			$sql = "UPDATE denuncia
					SET estado = 0
					WHERE iddenuncia = '$iddenuncia'";
			return ejecutarConsulta($sql);
		}
		public function show($iddenuncia)
		{
			$sql = "SELECT iddenuncia,idusuario, idubigeo, idtipo_denuncia, denunciado,
								cargo, organismo_implicado, fecha, hora, descripcion,
								estado
					FROM denuncia
					WHERE iddenuncia = '$iddenuncia'";
			return ejecutarConsultaSimpleFila($sql);

		}
		public function getAll()
		{
			$sql = "SELECT 		iddenuncia,idusuario, idubigeo, idtipo_denuncia, denunciado,
								cargo, organismo_implicado,
								fecha, hora, descripcion,estado
					FROM denuncia
					WHERE estado = 1";
			return ejecutarConsulta($sql);
		}
		
		public function getTiposDenuncias()
		{
			$sql = "SELECT 	*
					FROM tipo_denuncia
					WHERE estado = 'A'";
			return ejecutarConsulta($sql);
		}		

	}
