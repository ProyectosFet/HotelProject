<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <link href="{{ asset ('/css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <form action="" method="" class="formulario">
        <h1>Login</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Login" class="buttom" href="index.php">
            <p>Al registarte, aceptas nuestras condicionde de uso y política de privacidad</p>
            <p>¿No tienes cuenta? <a class="link" href="register">Registrate</a></p>
        </div>
    </form>
</body>

</html>