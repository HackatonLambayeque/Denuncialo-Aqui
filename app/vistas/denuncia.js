//Declaramos la variable tabla
var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarDpto();
	mostrarTiposDenuncia();

	$('#coddpto').change(function() {
      mostrarProv();
	});

	$('#codprov').change(function() {
      mostrarDist();
	});

	$('#idtipo_denuncia').change(function() {
      	cargarPasos();
	});

    $("#formularioDenuncia").on("submit",function(e)
	{
		addOrEdit(e);	
	});
	listarArchivos();

}
//Mostramos los departamentos
function cargarPasos()
{
	//Cargamos los items al combobox departamento
	idtipo_denuncia = $("#idtipo_denuncia").val();
	$.post("../ajax/denuncia.php?op=listarPasos",{idtipo_denuncia:idtipo_denuncia}, function(r){
			r = JSON.parse(r)
			$("#gegewp").find('tbody').empty()
			for (var i = 0; i < r.length; i++) {
				$("#gegewp").find('tbody')
				    .append($('<tr>')
				        .append($('<td>')
				        	.attr('class','text-center')
				            .append($('<span>')
				                .attr('class', 'label label-info')
				                .text(r[i][0])
				        
				            
				        )
				    ).append($('<td>')				    
				             .text(r[i][0])
				        
				            
				        )
				    )
				     
			}
	            //$("#gegewp").html(r);
	        //    console.log(r)

	});
}
//Mostramos los departamentos
function mostrarTiposDenuncia()
{
	//Cargamos los items al combobox departamento
	$.post("../ajax/denuncia.php?op=listarTiposDenuncia", function(r){
	            $("#idtipo_denuncia").html(r);
	            cargarPasos();
	});

}
function mostrarDpto()
{
	//Cargamos los items al combobox departamento
	$.post("../ajax/ubigeo.php?op=mostrarDpto", function(r){
	            $("#coddpto").html(r);
	});
}

function mostrarProv()
{
	//Cargamos los items al combobox departamento
	coddpto=$("#coddpto").val();
	//alert(coddpto);
	$.post("../ajax/ubigeo.php?op=mostrarProv",{coddpto: coddpto}, function(r){
	            $("#codprov").html(r);
	});
}
function mostrarDist()
{
	//Cargamos los items al combobox departamento
	coddpto=$("#coddpto").val();
	codprov=$("#codprov").val();
	//alert(coddpto+codprov);
	$.post("../ajax/ubigeo.php?op=mostrarDist",{coddpto: coddpto,codprov: codprov}, function(r){
	            $("#coddist").html(r);
	});
}

function addOrEdit(e)
{
	e.preventDefault();
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formularioDenuncia")[0]);

	$.ajax({
	    url: "../ajax/denuncia.php?op=SaveOrUpdate",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,
	    success: function(datos)
	    {                    
	          console.log(datos)
	          
	    }
	});
	limpiar();
}
function listarArchivos()
{
	$("#divarchivos").html("");
	//Cargamos los items al combobox tipo
	$.post("../ajax/denuncia.php?op=lista", function(r){
	            $("#divdenuncias").html(r);
	});
}
init();