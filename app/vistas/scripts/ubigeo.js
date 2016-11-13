//Declaramos la variable tabla
var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarDpto();

	$('#coddpto').change(function() {
      mostrarProv();
	});

	$('#codprov').change(function() {
      mostrarDist();
	});
}

//Mostramos los departamentos

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
init();