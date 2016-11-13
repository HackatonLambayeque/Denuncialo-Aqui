<?php 
	//Incluímos la conexión a la base de datos
	require "../config/Conexion.php";
	//Implementamos la clase
	class Grafico
	{
		//Implementamos nuestro constructor
		public function __construct()
		{

		}
		
		//Implementamos nuestro método para mostrar departamentos
		public function listaUbigeo()
		{
			$sql="SELECT u.nombre,count(d.iddenuncia) AS total FROM denuncia d INNER JOIN ubigeo u ON d.idubigeo=u.idubigeo GROUP BY u.nombre limit 0,12";
			return ejecutarConsulta($sql);
		}

		//Implementamos nuestro método para mostrar departamentos
		public function listaTipo()
		{
			$sql="SELECT t.nombre,count(d.iddenuncia) AS total FROM denuncia d INNER JOIN tipo_denuncia t ON d.idtipo_denuncia=t.idtipo_denuncia GROUP BY t.nombre";
			return ejecutarConsulta($sql);
		}

	}
?>