function registrar(){
	//Validar campos
	if($("#dni").val() == " "){
		alert("Falta el dni.");
		$("#dni").focus();
		return false;
	}
}