<!-- filepath: c:\Users\Seine\OneDrive\Desktop\python proyects\Serio\crud-mvc\resources\views\biens\edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Bien</title>
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
    <div class="container min-vh-50 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Editar</h4>
                    </div>
                    <div class="card-body text-center justify-content-center">
                        <form action="{{url('/biens/' . $bien->idBien)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombreBien" class="form-label">Nombre de bien</label>
                                    <input type="text" name="nombreBien" id="nombreBien" class="form-control"
                                        value="{{$bien->nombreBien}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoP" class="form-label">Código Patrimonio</label>
                                    <input type="text" name="codigoP" id="codigoP" class="form-control"
                                        value="{{$bien->codigoP}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="marca" class="form-label">Marca</label>
                                    <input type="text" name="marca" id="marca" class="form-control"
                                        value="{{$bien->marca}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="modelo" class="form-label">Modelo</label>
                                    <input type="text" name="modelo" id="modelo" class="form-control"
                                        value="{{$bien->modelo}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" name="color" id="color" class="form-control"
                                        value="{{$bien->color}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="serie" class="form-label">Serie</label>
                                    <input type="text" name="serie" id="serie" class="form-control"
                                        value="{{$bien->serie}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" name="descripcion" id="descripcion" class="form-control"
                                        value="{{$bien->descripcion}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="conservacion" class="form-label">Conservación</label>
                                    <select name="conservacion" id="conservacion" class="form-select">
                                        <option value="Nuevo" {{ $bien->conservacion == 'Nuevo' ? 'selected' : '' }}>Nuevo
                                        </option>
                                        <option value="Muy Bueno" {{ $bien->conservacion == 'Muy Bueno' ? 'selected' : '' }}>Muy Bueno</option>
                                        <option value="Bueno" {{ $bien->conservacion == 'Bueno' ? 'selected' : '' }}>Bueno
                                        </option>
                                        <option value="Regular" {{ $bien->conservacion == 'Regular' ? 'selected' : '' }}>
                                            Regular</option>
                                        <option value="Malo" {{ $bien->conservacion == 'Malo' ? 'selected' : '' }}>Malo
                                        </option>
                                        <option value="Inservible" {{ $bien->conservacion == 'Inservible' ? 'selected' : '' }}>Inservible</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>