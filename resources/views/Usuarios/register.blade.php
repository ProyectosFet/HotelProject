<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <link href="{{ asset ('/css/style.css')}}" rel="stylesheet" />
</head>

<body>


    <form action="" method="" class="formulario">
        <h1>Registrate</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" value="" name="nombre" placeholder="Nombre Completo">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" value="" name="correo" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" value="" name="contrasena" placeholder="Contraseña">
                <div>
                    <input type="hidden" name="id" value="" id="">
                </div>

            </div>
            <input type="submit" value="Registrar" class="buttom">
            <p>Al registarte, aceptas nuestras condicionde de uso y política de privacidad</p>
            <p>¿Ya tienes una cuenta? <a class="link" href="login">Iniciar sesion</a></p>
        </div>
    </form>

</body>

</html>