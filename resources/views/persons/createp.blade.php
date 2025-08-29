<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ingresa datos de nueva persona</h2>
    <form action="/persons/createp" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" ><br><br>

        <label for="apellidoPaterno">Apellido:</label>
        <input type="text" id="apellidoPaterno" name="apellidoPaterno" ><br><br>

        <label for="apellidoMaterno">Apellido:</label>
        <input type="text" id="apellidoMaterno" name="apellidoMaterno" ><br><br>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" ><br><br>

        <label for="departamento">Departamento</label>
        <input type="text" id="departamento" name="departamento"><br><br>

        <label for="distrito">Distrito</label>
        <input type="text" name="distrito" id="distrito"><br><br>

        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad"><br><br>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion"><br><br>

        <label for="genero">Genero</label>
        <select name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono"><br><br>

        <label for="dni">DNI</label>
        <input type="number" name="dni" id="dni"><br><br>

        <label for="email">Correo</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" id="cargo"><br><br>

        <label for="nEstudios">Nivel de Estudios</label>
        <input type="text" name="nEstudios" id="nEstudios"><br><br>

        <button type="submit">Guardar</button>
</body>
</html>