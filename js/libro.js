function puente(valor){
	if (document.pant.cepe.value== ""){
		alert("Esta vacio la cedula");
		return false;
	}
	if (valor == "Elimina")
	if (!confirm("Seguro de Eliminar"))
		return false;
	document.pant.ope.value = valor;
	document.pant.submit();
}
