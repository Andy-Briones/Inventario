<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bienes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <div class="menu-links text-center bg-dark">
        <a href="/biens" class="btn btn-outline-light me-2">Bienes Muebles</a>
        <a href="" class="btn btn-outline-light me-2">Reporte General</a>
        <a href="/" class="btn btn-outline-light me-2">Cerrar Sesión</a>
    </div>

    <div class="container mt-4">
        <form action="{{url('/biens')}}" method="POST" enctype="multipart/form-data"
            class="p-4 bg-white shadow rounded">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombreBien" class="form-label">Nombre del Bien</label>
                    <input type="text" name="nombreBien" id="nombreBien" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="codigoP" class="form-label">Código Patrimonio</label>
                    <input type="text" name="codigoP" id="codigoP" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" id="color" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="serie" class="form-label">Serie</label>
                    <input type="text" name="serie" id="serie" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="conservacion" class="form-label">Estado de Conservación</label>
                    <select name="conservacion" id="conservacion" class="form-select">
                        <option value="Nuevo">Nuevo</option>
                        <option value="Muy Bueno">Muy Bueno</option>
                        <option value="Bueno">Bueno</option>
                        <option value="Regular">Regular</option>
                        <option value="Malo">Malo</option>
                        <option value="Inservible">Inservible</option>
                    </select>
                </div>
                {{-- <div class="col-md-6">
                    <label for="estado" class="form-label">Asignar Bien</label>
                    <select name="estado" id="estado" class="form-select">
                        <option value="Persona 1">Persona 1</option>
                        <option value="Persona 2">Persona 2</option>
                        <option value="Persona 3">Persona 3</option>
                        <option value="Persona 4">Persona 4</option>
                        <option value="Persona 5">Persona 5</option>
                    </select>
                </div> --}}

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success me-2">Agregar</button>
                </div>
        </form>
    </div>
</body>

</html>