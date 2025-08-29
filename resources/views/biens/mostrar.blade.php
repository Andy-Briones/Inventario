<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div
            style="background: linear-gradient(90deg, #005baa 0%, #34A9CF 100%); color:#fff; padding:20px 0; text-align:center; position:relative;">
            <h1 style="margin:0;">SISTEMA INTEGRADO DE GESTION PATRIMONIAL</h1>
            <p style="margin:0;">Oficina General de informática y Sistemas</p>
            <p>CAJAMARCA - PERU</p>
            <img src="Imgs/logoCaja.png" alt="Logo Municipalidad"
                style="position:absolute; right:60px; top:45%; transform:translateY(-50%); height:200px;">
        </div>
    </header>
    <!-- <div style="background: linear-gradient(90deg, #4e8dc4ff 0%, #34A9CF 100%); color:#fff; padding:20px 0; text-align:center; position:relative;"></div>
        <h2>Sistema de Gestión Patrimonial (SISPAT) </h2>
    </div> -->

    <div class="menu-links">
        <a id="solo" href="/biens/create">Nuevo</a>
        <a href="/biens">Bienes Muebles</a>
        <a href="">Reporte General</a>
        <a href="/">Cerrar Sesion</a>
        <search type="text">Buscar</search>
    </div>
    <div class="menu-user-info">
        <label>USUARIO: USUARIO1</label>
        <label>CARGO: ASISTENTE</label>
        <label>AREA: OFICINA - PATRIMONIO</label>
        <label>NIVEL DE ACCESO: USUARIO</label>
    </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Cod. Patrimonial</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Serie</th>
                <th>Descripcion</th>
                <th>Conservacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biens as $bien)
                <tr>
                    <td>{{ $bien->idBien }}</td>
                    <td>{{ $bien->nombreBien }}</td>
                    <td>{{ $bien->codigoP }}</td>
                    <td>{{ $bien->marca }}</td>
                    <td>{{ $bien->modelo }}</td>
                    <td>{{ $bien->color }}</td>
                    <td>{{$bien->serie}}</td>
                    <td>{{$bien->descripcion}}</td>
                    <td>{{$bien->conservacion}}</td>
                    <td>
                        <a href="{{ url('/biens/' . $bien->idBien . '/edit') }}" class="btn-edit">Editar</a>
                        |
                        <form action="{{ url('/biens/' . $bien->idBien) }}" method="post" style="display:inline;">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn-delete"
                                onclick="return confirm('¿Quieres Dar de Baja este bien?');">
                                Dar de Baja
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>