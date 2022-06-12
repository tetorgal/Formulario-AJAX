   // Validar Formulario
   function validaForm(){
    // Campos de texto
    if($("#Nom").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        return false;
    }
    if($("#Usr").val() == ""){
        alert("El campo Usuario no puede estar vacío.");
        return false;
    }
    if($("#Psswrd").val() == ""){
        alert("El campo Contraseña no puede estar vacío.");
        return false;
    }
    return true; // Si todo está correcto
}
        // Enviar con AJAX
        $("#enviar").click(function(e) {
       e.preventDefault();
            if(validaForm()){
            $.ajax({
                type: "POST",
                url: "enviar.php",
                data: $('#formulario').serialize(),
                success: function(responder) {
                   $('#respuesta').html(responder);
                }
            });
        }
        });
    
//Document Ready