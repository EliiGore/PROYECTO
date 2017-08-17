///Script para obtener los datos necesarios de cada pestaña
/// funciones para crear y obtener datos de estudiantes
function nuevosEstudiantes(Estudiantes,Editando,Eliminando){
  console.log(Estudiantes);
  var objetoJSON = JSON.stringify(Estudiantes);
  localStorage.setItem("Estudiantes",objetoJSON);
  if(Editando){
  alert("Datos Modificados y Guardados.");
  }
  else if(Eliminando) {
    alert("Cliente Eliminado con exito")
  }
  else{
  alert("Cliente registrado con exito");
  }
};


function obtenerEstudiantes(){
  var Estudiantes = localStorage.getItem("Estudiantes");
  return JSON.parse(Estudiantes)||{};
};
