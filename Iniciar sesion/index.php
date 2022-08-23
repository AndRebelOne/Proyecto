<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                    <li><a href="../Registro/registro.html">Registrarse</a></li>
                    <li><a href="#">Mi cuenta</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form class="form-login" method="post">
        <h5>Iniciar Sesion</h5>
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        <input class="controls2" type="password" name="contrasena" value="" placeholder="Contraseña">
        <input class="btn btn-primary" type="submit" name="iniciar" value="Ingresar"></input>
        <p>No tienes una cuenta? Registrate <a href="../Registro/registro.php">aquí <a></p>

    </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/77233f7af8.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>