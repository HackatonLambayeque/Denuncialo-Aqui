<?php 
include "cabecera.php";
?>
	<!-- contenido Inicio-->
	<div id="page-wrapper">
		

		<!--formulario -->
		<div class="container-fluid" id="formularioregistros">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Categorías</h4>
						</div>
						<div class="panel-body">
							<form name="frmCategoria" id="frmCategoria" method="POST">
								<div class="form-group">
									<label>Departamento:</label>
									<select name="codpto" id="coddpto" class="form-control"></select>
								</div>
								<div class="form-group">
									<label>Provincia:</label>
									<select name="codprov" id="codprov" class="form-control"></select>
								</div>
								<div class="form-group">
									<label>Distrito:</label>
									<select name="coddist" id="coddist" class="form-control"></select>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- contenido fin -->
</div>
<?php 
include "pie.php";
?>

<script type="text/javascript" src="scripts/ubigeo.js"></script>
