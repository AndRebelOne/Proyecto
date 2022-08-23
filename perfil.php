<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="perfil_style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
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
<div id=contenedorPerfil>
<div id=portada><div id=perfil ></div></div><div id=nombre_usuario>Nombre</div>



</div>
<h2>Informacion Boleto Comprado</h2>
<div class="contenedorTabla">
<?php
include("boletos_usuario.php");
    ?> 
    
</div>
</body>
</html>