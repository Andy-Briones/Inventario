<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Encabezado -->
    <header>
        <div
            style="background: linear-gradient(90deg, #005baa 0%, #34A9CF 100%); color:#fff; padding:20px 0; text-align:center; position:relative;">
            <h1 style="margin:0;">Municipalidad Pronvincial de Cajamarca</h1>
            <p>CAJAMARCA - PERU</p>
            <img src="{{ asset('Imgs/logoCaja.png') }}" alt="Logo Cajamarca"
                style="position:absolute; right:60px; top:45%; transform:translateY(-50%); height:180px;">
        </div>
    </header>

    <!-- Cuerpo -->
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <!-- Cuadro con imagen -->
        <div id="FondoCuadro">
            <img src="{{ asset('Imgs/logoCaja.png') }}" alt="Logo Municipalidad" style="max-width:550px; max-height:550px;">
        </div>


        <!-- Formulario de Login -->
        <form id="loginForm" action="/biens">
            <!-- <br>
            <label for="usuario">Usuario o Correo: </label>
            <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="password">Contraseña: </label>
            <input type="password" id="password" name="password" required>
            <br>-->
            <button type="submit" href="/biens">Ingresar</button>
        </form>
    </div>
</body>

<!-- pie de página -->
<footer style="position:fixed; left:0; bottom:0; width:100%; z-index:100;">
    <div style="display: block; text-align: center; background:#204a63; position: relative; padding: 15px;">
        <span style="font-size: 0.8rem; color:white;">Para apoyo técnico
            escribir al Whatsapp
            <strong> <i class="fa fa-whatsapp" aria-hidden="true"></i> 954033172</strong>
            o llamar <br> al teléfono:
            <strong><i class="fa fa-phone fa-rotate-90"></i> 076-602661 Anexo 3022</strong>
        </span><br>
        <span style="font-size: 0.8rem; color:white; font-weight: bold;">Atención: Lunes a Viernes de 8am
            a 1pm y
            de&nbsp;2pm&nbsp;a&nbsp;4pm</span>
    </div>
</footer>

</html>

<!-- Estilo Bandera -->
<!-- <style>
    @keyframes wave {
        0% {
            clip-path: polygon(0% 30%, 100% 0%, 100% 80%, 90% 80%, 10% 90%, 0% 100%);
        }

        100% {
            clip-path: polygon(0% 10%, 100% 0%, 100% 90%, 90% 100%, 0% 100%, 0% 90%);
        }
    }
</style> -->