function entroEnFoco(elemento) {
	elemento.className='enfoco';
}

function salioDeFoco(elemento) {
	elemento.className='';
	
}

function revisarObligatorio(elemento) {
	if (elemento.value=="") {
		elemento.className='error';	
        alert("El usuario esta vacio");
	} else {
		elemento.className='';	
	}
}

function revisarLongitud(elemento, minimoDeseado) {
	if (elemento.value!="") {
		var dato = elemento.value;
		if (dato.length<minimoDeseado) {
			elemento.className='error';	
            alert("La contraseña debe ser de 8 caracteres");
		} else {
			elemento.className='';	
		}
	}
}