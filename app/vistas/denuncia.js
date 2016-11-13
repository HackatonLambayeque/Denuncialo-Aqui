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
    $("#formularioDenuncia").on("submit",function(e)
	{
		addOrEdit(e);	
	});
	listarArchivos();
}

//Mostramos los departamentos
function mostrarTiposDenuncia()
{
	//Cargamos los items al combobox departamento
	$.post("../ajax/denuncia.php?op=listarTiposDenuncia", function(r){
	            $("#idtipo_denuncia").html(r);
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