function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-13-37-39-46";

	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
		    tecla_especial = true;
		    break;
		}
	}

	if(letras.indexOf(tecla)==-1 && !tecla_especial){
		alert("Ingrese solo letras")
		return false;
	}
}
function soloNumeros(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	numeros = "0123456789";
	especiales = "8-13-37-39-46";

	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
			tecla_especial = true;
		    break;
		}
	}

	if(numeros.indexOf(tecla)==-1 && !tecla_especial){
		alert("Ingrese solo numeros")
		return false;
	}
}

function puente(valor){
	if (document.pant.prno.value== ""){ //valida que el campo no este vacio
		alert("Ingrese Primer nombre");
		return false;
	}
	
	if (document.pant.prap.value== ""){ //valida que el campo no este vacio
		alert("Ingrese Primer Apellido");
		return false;
	}

	if (document.pant.nacionalidad.selectedIndex==0){ //valida la nacionalidad
       alert("Debe seleccionarla nacionalidad.");
       return false;
    }

	if (document.pant.cepe.value== ""){ //valida que el campo no este vacio
		alert("Ingrese la Cedula");
		return false;
	}

    if (document.pant.sexpe.selectedIndex==0){ //valida el sexo
       alert("Debe seleccionar Genero.");
       return false;
    }

     if (document.pant.fecdipe.selectedIndex==0){ //valida que seleccione dia
       alert("Debe seleccionar un dia.");
       return false;
    }

     if (document.pant.fecmepe.selectedIndex==0){ //valida que seleccione mes
       alert("Debe seleccionar un mes.");
       return false;
    } 

     if (document.pant.fecanpe.selectedIndex==0){ //valida que seleccione ano
       alert("Debe seleccionar el ano.");
       return false;
    } 

     if (document.pant.carrera.selectedIndex==0){ //valida que seleccione carrera
       alert("Debe seleccionar la carrera.");
       return false;
    }

     if (document.pant.semestre.selectedIndex==0){ //valida que seleccione semestre
       alert("Debe seleccionar el semestre.");
       return false;
    }

     if (document.pant.turno.selectedIndex==0){ //valida que seleccione turno
       alert("Debe seleccionar el turno.");
       return false;
    } 

	if (valor == "Elimina")
	if (!confirm("Seguro de Eliminar"))
		return false;
	document.pant.ope.value = valor;
	document.pant.submit();
}