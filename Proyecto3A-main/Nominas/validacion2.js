function enfocado2(elemento) {
	elemento.className='enfocado';
}

function desenfocado2(elemento) {
	elemento.className='form-control';
}

function validarTexto(elemento,longitud) {
	if (elemento.value!="") {
		if (elemento.value.length<longitud) {
			elemento.className='error';	
			alert("Campo invalido, debe tener al menos " +longitud +" caracteres de longitud");
		}
	}
}

function validarNumero(elemento,longitud){
	if (elemento.value!="") {
		if(elemento.value.length<longitud) {
			elemento.className='error';
			alert("Sueldo invalido, debe tener " +longitud +" digitos");
		} else if(isNaN(elemento.value)==true) {
			elemento.className='error';
			alert("Numero invalido");
		}
	}
}

function validar2() { 
	var estaTodoOK = true;

	var id = document.getElementById("id").value;
	var sue = document.getElementById("sueldo").value;
	var opcion = document.getElementById("opcion_submit").value;
	
	switch(parseInt(opcion)) {
		case 0: 
			estaTodoOK = false;
			alert("Opcion NO valida");
			break;
		case 2:
		case 3: if(id=="" || sue=="") {
			estaTodoOK = false;
			alert("Ingresa una ID y un Sueldo");
		} break;
		case 4: if(id=="") {
			estaTodoOK = false;
			alert("Ingresa una ID");
		} break;
	}

	return estaTodoOK;

}