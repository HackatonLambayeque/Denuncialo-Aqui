<?php
	require "../config/Conexion.php";

	class Denuncia
	{	

		public function __construct()
		{
			
		}

		public function add($idusuario,$idubigeo,$idtipo_denuncia,$denunciado,$cargo,$organismo_implicado,$descripcion,$imagen,$titulo)
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
								fecha, hora, descripcion,estado,imagen,titulo)
					VALUES('$idusuario','$idubigeo','$idtipo_denuncia','$denunciado',
						   '$cargo','$organismo_implicado', now(),TIME(now()),
						   '$descripcion','A','$imagen','$titulo');";
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
			$sql = "SELECT 	d.iddenuncia,u.idusuario, u.Fname, t.nombre,d.titulo, d.denunciado,
								d.cargo, d.organismo_implicado,
								d.fecha, d.hora, d.descripcion,ifnull((d.imagen),'sinimagen.JPG') as imagen
								FROM denuncia d INNER JOIN users u ON d.idusuario=u.idusuario INNER JOIN tipo_denuncia t ON d.idtipo_denuncia=t.idtipo_denuncia
					WHERE d.estado ='A'";
			return ejecutarConsulta($sql);
		}

		public function getTiposDenuncias()
		{
			$sql = "SELECT 	*
					FROM tipo_denuncia
					WHERE estado = 'A'";
			return ejecutarConsulta($sql);
		}		
		public function listarPasos($idtipo_denuncia)
		{
			$sql = "SELECT 	*
					FROM pasos_denuncia
					WHERE idtipo_denuncia = '$idtipo_denuncia' order by numero asc";
			return ejecutarConsulta($sql);
		}	
	}
