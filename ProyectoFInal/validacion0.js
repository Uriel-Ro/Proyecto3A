function enfocado(elemento) {
	elemento.className='enfocado';
}

function desenfocado(inp,elemento) {
	switch(inp) {
		case "inpN": elemento.className='input';
			break;
		case "inpM": elemento.className='inputM';
			break;
		case "inpC": elemento.className='select';
			break;
	}
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

function validar(event) { 
	var estaTodoOK = true;

	var id = document.getElementById("id").value;
	var sue = document.getElementById("sueldo").value;
	
	if(id=="" || sue=="") {
		estaTodoOK = false;
	}

	return estaTodoOK;

}
/*
function validarEmail(elemento) {
	if (elemento.value!="") {
		var dato = elemento.value;
		var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
		if (!expresion.test(dato)) {
			elemento.className='error';
            alert("Correo invalido");
		} else {
			elemento.className='';	
		}
	}
}

function validar(event) {
	var estaTodoOK = true;

	var nom = document.getElementById("nombre").value;
	var ap = document.getElementById("apellido").value;
	var org = document.getElementById("org").value;
    var tel= document.getElementById("telefono").value;
	var email = document.getElementById("email").value;
	var dir = document.getElementById("direccion").value;
	var callest = document.getElementById("callest").value;
	var ciudad = document.getElementById("ciudad").value;
	var region = document.getElementById("region").value;
	var cp = document.getElementById("cp").value;
	var conf = document.getElementById("tituloconf").value;

	if(nom=="" || ap=="" || org=="" || tel=="" || email=="" || dir=="" || callest=="" || ciudad=="" || region=="" || cp=="" || conf=="") {
		estaTodoOK = false;
	}

	var pais = document.getElementById("pais").value;
	if(pais == "0") {
		estaTodoOK = false;
		alert("Error, pais no elegido")
	}
	switch(parseInt(pais)) {
		case 1: pais = "Mexico";
			break;
		case 2: pais = "USA";
			break;
		case 3: pais = "Canada";
			break;
		case 4: pais = "Colomabia";
			break;
		case 5: pais = "Chile";
			break;
		case 6: pais = "Argentina";
			break;
	}

	var check1 = document.getElementById("participacion1").checked;
	var check2 = document.getElementById("participacion2").checked;
	var check3 = document.getElementById("participacion3").checked;
	var check4 = document.getElementById("participacion4").checked;
	var participacion = "";
	if (!(check1 || check2 || check3 || check4)) {
        estaTodoOK = false;
		alert("Selecciona una participacion");
	}
	
	if (estaTodoOK==false) {
		alert("Algunos datos tienen errores, por favor corregir antes de volver a enviar.");	
	}
	if(check1==true) {
		participacion = "Cursos por la mañana" + "<br/>";
	} if(check2==true) {
		participacion = participacion + "Cursos por la tarde" + "<br/>";
	} if(check3==true) {
		participacion = participacion + "Workshops" + "<br/>";
	} if(check4==true) {
		participacion = participacion + "Cena";
	}

    if (estaTodoOK){
        
    	document.write("<strong>***** Datos registrados ******</strong><br/>");
    	document.write("Nombre: " + nom + " <br/>");
		document.write("Apellido: " + ap + " <br/>");
		document.write("Organizacion: " + org + " <br/>");
        document.write("Telefono: " + tel + " <br/>");
		document.write("Correo: " + email + " <br/>");
		document.write("Direccion: " + dir + " <br/>");
		document.write("Calles Transversales: " + callest + " <br/>");
		document.write("Ciudad: " + ciudad + " <br/>");
		document.write("Region: " + region + " <br/>");
		document.write("CP: " + cp + " <br/>");
		document.write("Pais: " + pais + " <br/>");
		document.write("Conferencia: " + conf + " <br/>");
		document.write("Participacion: " + participacion + " <br/>");
        document.write("<a href=\"Registro.html\">Regresar</a> ");
        alert("Registro exitoso!!!");
    }
	event.preventDefault();
	return estaTodoOK;
}
	*/