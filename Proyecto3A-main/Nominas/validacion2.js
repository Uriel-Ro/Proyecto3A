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
		case 1: if(id=="") {
			estaTodoOK = false;
			alert("Ingresa una ID");
			} break;
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

function validar_dis() {
	var estaTodoOK = true;

	var turno = "";
	var asg = "";
	var id = document.getElementById("id").value;

	if(document.querySelector('input[name="turno"]:checked')) {
		var turno = document.querySelector('input[name="turno"]:checked').value;
	}
	
	var dir = document.getElementById("dir_asg").value;
	if(document.querySelector('input[name="no_asg"]:checked')) {
		var asg = document.querySelector('input[name="no_asg"]:checked').value;
	}
	
	var dia = document.getElementById("dia").value;
	var opcion = document.getElementById("opcion_submit").value;
	
	switch(parseInt(opcion)) {
		case 0: 
			estaTodoOK = false;
			alert("Opcion NO valida");
			break;
		case 1: 
			if(dir != "") {
				//pasa
			} else if(turno == "" && asg == "" && dia == "0") {
				estaTodoOK = false;
				alert("Ingrese al menos una opcion de busqueda");
			}
			break;
		case 2: if(id == "" || dir == "") {
			estaTodoOK = false;
			alert("Ingresa ambas ID");
			} break;
		case 3: if(id == "" && dir == "") {
			estaTodoOK = false;
			alert("Ingresa la(s) ID");
			} else if(dir == "") {
				estaTodoOK = false;
				alert("Ingresa la ID direccion");
			}
			break;
	}

	return estaTodoOK;

}