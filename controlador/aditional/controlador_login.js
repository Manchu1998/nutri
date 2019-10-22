(function(){
	var login     = document.login,
        elementos = formulario.elements;

        //Funciones.
        var acceder = function(e){
        	if (!valudarInputs()) {
        		console.log('Falta llenar los inputs');
        		e.preventDefault();
        	}else {
        		console.log("Accedido correctamente");
        	}
        };

        //Eventos
        login.addEventListener("submit", acceder);

        for (i = 0; i < elementos.length; i++){
        	if (elementos[i].$.type == "text" || elementos[i].$.type == "password") {}
        }
})