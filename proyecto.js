var correo = document.querySelector('#correo');
var nombre = document.querySelector('#nombre');
var contraseña = document.querySelector('#contraseña');


function validarEmail(correo) {
    var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido = expReg.test(correo);
    if (esValido == false) {
        alert("La dirección de email no es valida.");

    }
};

function validarNombre(nombre) {
    var expReg = /^[A-Z a-z]+$/i;
    var esValido = expReg.test(nombre);
    if (esValido == false) {
        alert("El nombre no es valido");
    }
};

function validarContraseña(contraseña) {
    var expReg = /^[A-Z a-z]+$/i;
    var esValido = expReg.test(contraseña);
    if (esValido == false) {
        alert("La contraseña no es valida");
    }
};

document.querySelector('#enviarregistro').addEventListener('click', function() {
    validarNombre(nombre.value);
    validarEmail(correo.value);
    validarContraseña(contraseña.value);
});

$(function() {

    var Page = (function() {

        var $navArrows = $('#nav-arrows').hide(),
            $shadow = $('#shadow').hide(),
            slicebox = $('#sb-slider').slicebox({
                onReady: function() {

                    $navArrows.show();
                    $shadow.show();

                },
                orientation: 'r',
                cuboidsRandom: true,
                disperseFactor: 30
            }),

            init = function() {

                initEvents();

            },
            initEvents = function() {

                // add navigation events
                $navArrows.children(':first').on('click', function() {

                    slicebox.next();
                    return false;

                });

                $navArrows.children(':last').on('click', function() {

                    slicebox.previous();
                    return false;

                });

            };

        return { init: init };

    })();

    Page.init();

});

/*Registro */