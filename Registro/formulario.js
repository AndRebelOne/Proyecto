var correo = document.querySelector('#correo');
var nombre = document.querySelector('#nombre');
var contraseña = document.querySelector('#contraseña');
var alertaNombre = document.getElementById('alertaNombre');
var alertaCorreo = document.getElementById('alertaCorreo');
var alertaContrasena = document.getElementById('alertaContrasena');
var form = document.getElementById('enviarRegistro');


function recarga(){
    window.reload
}


function validarNombre(nombre) {
    var expReg = /^[A-Z a-z]+$/i;
    var esValido = expReg.test(nombre);
    if (nombre.value == ""){
        alertaNombre.style.display = 'block';
        setTimeout(function() {
            alertaNombre.style.display = 'none';
        }, 2000);
        
        return false;
    }

    return true;
    
    // if (esValido == false) {
    //     alertaNombre.style.display = 'block';
    //     setTimeout(function() {
    //         alertaNombre.style.display = 'none';
    //     }, 2000);
    // }
    
};

function validarEmail(correo) {
    var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido = expReg.test(correo);
    if (correo.value == ""){
        alertaCorreo.style.display = 'block';
        setTimeout(function() {
            alertaCorreo.style.display = 'none';
        }, 2000);
        
        return false;
    }

    return true;
    // if (esValido == false) {
    //     alertaCorreo.style.display = 'block';
    //     setTimeout(function() {
    //         alertaCorreo.style.display = 'none';
    //     }, 2000);
    // }
    
};

function validarContrasena(contraseña) {
    var expReg = /^[A-Z a-z]+$/i;
    var esValido = expReg.test(contraseña);
    if (contraseña.value == ""){
        alertaContrasena.style.display = 'block';
        setTimeout(function() {
            alertaContrasena.style.display = 'none';
        }, 2000);
        
        return false;
    }  
    
    return true;
};

form.addEventListener('click', function(e) {
    
    var nombreOk = validarNombre(nombre); 
    var emailOk = validarEmail(correo); 
    var contrasenaOk = validarContrasena(contraseña); 

    if(!nombreOk || !emailOk  || !contrasenaOk ){
        e.preventDefault();
    } else { 
        alertaRegistro.style.display = 'block';
        setTimeout(function() {
            alertaRegistro.style.display = 'none';
        }, 2000);
    }

    
    
});