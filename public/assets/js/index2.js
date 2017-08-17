 $(window).load(function(){
  console.log("cargando el script index");
  var Editando = false;

  $('#e1').click(Agregar)

  function AgregarATabla(evento){
    var Estudiantes = obtenerEstudiantes();
    var tabla;
    $.each(Estudiantes, function(index, value) {
        tabla = tabla +'<tr>'+
        '<td>'+value.id+'</td>'+
        '<td>'+value.nombre1+'</td>'+
        '<td>'+value.direccion1+'</td>'+
		'<td>'+value.canton1+'</td>'+
		'<td>'+value.parroquia1+'</td>'+
		'<td>'+value.codigo1+'</td>'+
		'<td>'+value.medidor1+'</td>'+
        '<td>'+value.fecha+'</td>'+
		'<td>'+value.consumo1+'</td>'+
		'<td>'+value.total1+'</td>'+
        '<td><button type="button"><img class="imgEditar" id="'+value.id+'"src="img/editar.png"></button></td>'+
        '<td><button><img class="imgBorrar" id="'+value.id+'" src="img/eliminar.png"></button></td>'+
        '</tr>';
      });
    $("#tabla").html($("#tabla").html()+tabla);
    clickImagen();
  }
AgregarATabla();

function clickImagen(){
    $( ".imgEditar" ).each(function() {

      $(this).click(Editar);
    });
    $( ".imgBorrar" ).each(function() {
      $(this).click(Borrar);
    });
}

function Editar(){
  var Estudiantes = obtenerEstudiantes();
  var estu = this.id;
  $("#nombre").val(Estudiantes[estu].nombre1);
  $("#cedula").val(Estudiantes[estu].id);
  $("#direccion").val(Estudiantes[estu].direccion1);
  $("#canton").val(Estudiantes[estu].canton1);
  $("#parroquia").val(Estudiantes[estu].parroquia1);
  $("#codigop").val(Estudiantes[estu].codigo1);
  $("#medidor").val(Estudiantes[estu].medidor1);
  $("#Selector").val(Estudiantes[estu].fecha);
  $("#consumo").val(Estudiantes[estu].consumo1);
  $("#cedula").attr("readonly", "readonly");
  $("#nombre").focus();
  Editando = true;
}

function Borrar(){
  var result = confirm("Seguro de eliminar el Item seleccionado?");
  if (result == true) {
      var Estudiantes = obtenerEstudiantes();
      var codigo = this.id;
      delete Estudiantes[codigo];
      nuevosEstudiantes(Estudiantes,false,true);
      location.reload();
  }

}
function Agregar(){
    var Estudiantes = obtenerEstudiantes();
    var nombre1 = $("#nombre").val();
    var cedula1 = $("#cedula").val();
    var direccion1 = $("#direccion").val();
	var canton1 = $("#canton").val();
	var parroquia1 = $("#parroquia").val();
	var codigo1 = $("#codigop").val();
	var medidor1 = $("#medidor").val();
	var a = document.getElementById("Selector");
    var fecha = a.options[a.selectedIndex].text;
	var consumo1 = $("#consumo").val();
	var total1 = $("#total").text();

   
      if ((nombre1 == "" || nombre1 == null||nombre1 == undefined)||
      (cedula1 == "" || cedula1 == null|| cedula1 == undefined)||
      (direccion1 == "" || direccion1 == null|| direccion1 == undefined)||
	  (canton1 == "" || canton1 == null|| canton1 == undefined)||
	  (parroquia1 == "" || parroquia1 == null|| parroquia1 == undefined)||
	  (codigo1 == "" || codigo1 == null|| codigo1 == undefined)||
	  (medidor1 == "" || medidor1 == null|| medidor1 == undefined)||
      (fecha == "" || fecha == null|| fecha == undefined)||
	  (consumo1 == "" || consumo1 == null|| consumo1 == undefined)||
	  (total1 == "" || total1 == null|| total1 == undefined)
	  
      ) 
	  if(cedula1.length < 10){ return alert("Ingrese un numero de cedula1 valido")}
    if (Editando == false) {
      if ( Estudiantes[cedula1] != null && Estudiantes[cedula1] != undefined) { 
        return alert("Este cliente ya esta registrado")
      }
    }
	  if (consumo1 == "") {
			alert("Ingrese los datos solicitados");
			return;
	
	}
    Estudiantes[cedula1] = {id:cedula1, nombre1:nombre1,direccion1:direccion1,canton1:canton1,parroquia1:parroquia1,codigo1:codigo1,medidor1:medidor1,fecha:fecha,consumo1:consumo1,total1:total1}
    nuevosEstudiantes(Estudiantes,Editando,false);
    actualizarNotas();
  }

});