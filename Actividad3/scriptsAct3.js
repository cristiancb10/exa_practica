//para que carga todo el html
document.addEventListener('DOMContentLoaded', function() {
    //guarda los valores de los checkbox true o false y lo datos del formulario
    const registroForm = document.querySelector('.formulario1');
    //devuelve un node list con los elementos de los checkboxes
    const validacionCheckboxes = document.querySelectorAll('.validation-check');
    //registra cuando se quiere enviar el formulario
    registroForm.addEventListener('submit', function(e) { 
        e.preventDefault(); //para que el formulario no se envie al recargar la pagina
        console.log("Validando formulario..."); 
        
        // Obtener valores (usa el ID exacto con espacios)
        const nombre = document.getElementById('username').value.trim(); //elimina espacios en blanco
        const edad = parseInt(document.getElementById('edad').value);
        const correo = document.getElementById('correo').value.trim();
        const contrasena = document.getElementById('contraseña').value;
        const confirmarContrasena = document.getElementById('confirmar contraseña').value; 
        
        console.log("Valores obtenidos:", {nombre, edad, correo, contrasena, confirmarContrasena}); 
        
        // desamarca los checkboxes para empezar a registrar en 0
        validacionCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        //arrays de errores
        const errors = [];
        
        // Validación Nombre
        if (!nombre) { //verifica si esta vacio
            errors.push('Nombre Completo es obligatorio'); //añade mensaje de error
        } else {
            validacionCheckboxes[0].checked = true; //marca si es valido
        }
        
        // Validación Edad
        if (isNaN(edad)){ //verfica si es un numero
            errors.push('Edad debe ser un número');  //añade mensaje de error
        } else if (edad < 18) {
            errors.push('Debes ser mayor de 18 años'); //añade mensaje de error
        } else {
            validacionCheckboxes[1].checked = true; //marca si es valido
        }
        
        // Validación Correo
        if (!correo.includes('@')) { //verifica si tiene @
            errors.push('Correo debe contener @'); //añade mensaje de error
        } else {
            validacionCheckboxes[2].checked = true; //marca si es valido
        }
        
        // Validación Contraseña
        if (contrasena.length < 6) { //longitud mínima de 6
            errors.push('Contraseña debe tener mínimo 6 caracteres'); //añade mensaje de error
        } else {
            validacionCheckboxes[3].checked = true; //marca si es valido
        }
        
        // Validación Confirmar Contraseña
        if (contrasena !== confirmarContrasena) { // ve si es la misma contraseña
            errors.push('Las contraseñas no coinciden'); //añade mensaje de error
        } else if (confirmarContrasena) {
            validacionCheckboxes[4].checked = true; //marca si es valido
        }
        
        // Mostrar resultados
        if (errors.length > 0) { //Cantidad de errores encontrados
            console.error("Errores:", errors); //añade mensaje de error
        } else {
            console.log("Formulario válido"); //añade mensaje de valido
            alert("¡Registro exitoso!"); //añade mensaje en la pagino
            registroForm.reset(); //limpia los campos de formulario
        }
    });
});