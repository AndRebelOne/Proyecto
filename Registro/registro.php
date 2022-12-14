<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="register_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Registro</title>
</head>

<body>

    <header>
        <!--header nombre empresa-->
        <div id="contenedorHeader">
            <div id="logo">
                <h3>Skyfly</h3>
            </div>
            <!--header Menu de navegacion-->
            <nav id="menu">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../Iniciar sesion/index.html">Iniciar Sesion</a></li>
                    <li><a href="#">Mi cuenta</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="limiter">
        <div class="contenedor_registro">
            <div class="registro">


                <form class="form_registro validar_form" method="post">
                    <span class="titulo_registro">
                        Registrar
                    </span>
                    <div class="contenedor_btnRegistro validar_registro" data-validate="Nombre es requerido">
                        <input class="input_registro" id="nombre" type="text" name="nombre" placeholder="Nombre">
                        <span class="focus-inputRegistro"></span>
                        <span class="icono-input">
                            <i class="fa-solid fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="contenedor_btnRegistro validar_registro" data-validate="Correo Electronico es requerido">
                        <input class="input_registro" id="correo" type="text" name="email" placeholder="Correo Electronico">
                        <span class="focus-inputRegistro"></span>
                        <span class="icono-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="contenedor_btnRegistro  validate-input" data-validate="Contrase??a es requerida">
                        <input class="input_registro" id="contrase??a" type="password" name="contrase??a" placeholder="Contrase??a">
                        <span class="focus-inputRegistro"></span>
                        <span class="icono-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="contenedor_btnregistrarform">
                        <button type="submit" id="enviarRegistro" name="registrar" class="registrar-form-btn">
                            Registrar
                        </button>
                    </div>

                    <div class='alert alert-danger alerta' id="alertaNombre" role='alert' style="display: none">Ingrese un nombre</div>
                    
                    <div class='alert alert-danger alerta' id="alertaCorreo" role='alert' style="display: none">Ingrese un correo</div>

                    <div class='alert alert-danger alerta' id="alertaContrasena" role='alert' style="display:none">Ingrese una contrase??a</div>

                    <div class='alert alert-success alerta' id="alertaRegistro" role='alert' style="display: none">Registro completo!</div>
                    

                    <div class="text-center">
                        <a class="tieneCuenta" href="../Iniciar sesion/index.html">
                            ??Ya tienes cuenta? Inicia Sesion
                        </a>
                    </div>
                </form>
                <div class="imagen_registro">
                    <img src="../Recursos/IMG/register_avion.jpg" alt="IMG_Avion">
                </div>
            </div>
        </div>
    </div>
    <script src="formulario.js"></script>

    
    <script src="https://kit.fontawesome.com/77233f7af8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/263ed9621b.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <?php

    include("registrar.php");
    
    ?>
</body>

</html>