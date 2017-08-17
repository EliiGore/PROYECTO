function ProductoVC() {
var consumo=document.getElementById("consumo");
var actual=document.getElementById("actual");


var can, act, aun, fin;

can = parseFloat (consumo.value);
act = parseFloat (actual.value);


aun= can*(0.083/1);
fin= aun*(30);

if (isNaN(fin) || fin < 0|| fin > 10000){
                 	
if (isNaN(fin)|| fin < 0 || fin > 1000){
act=fin;
actual.value = act.toFixed(2);
}
} else {
act=fin;
actual.value = act.toFixed(2);
}

$("#total").text((act+1.82+1.62+1.59+14/100).toFixed(2))

}
function validarNumero(e){
		var key = window.Event ? e.which : e.keyCode
		return ((key >= 48 && key <= 57) || (key == 45) || (key == 32 ))
	}

	function validarLetra(e){
		var key = window.Event ? e.which : e.keyCode
		return ((key >= 65 && key <= 90 ) || (key == 32) || (key >= 96 && key <= 122 ))
	}	

   

