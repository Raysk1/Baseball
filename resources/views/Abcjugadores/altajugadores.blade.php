<!DOCTYPE html>
<html>

<head>
    <title>Formulario de AbcJugadores</title>
    <style type="text/css">
        form {
            display: grid;
            grid-template-columns: 150px 1fr;
            grid-row-gap: 10px;
            margin: 20px;
        }

        label {
            font-weight: bold;
            color: aliceblue
        }

        input,
        select {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        body {
            background-image: url('https://i.etsystatic.com/21060982/r/il/9f8ce2/2668916552/il_794xN.2668916552_jyiv.jpg');
            background-size: cover;
            background-position: center;
        }
        h1{
            color: aliceblue;
            text-align: center;
        }
    </style>
</head>

<body>
    
    <h1>JUGADORES</h1>
    <form method="post" action="procesar.php">
        
        <label for="idAfiliacion">ID de Afiliación:</label>
        <input type="text" name="idAfiliacion" id="idAfiliacion" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>

        <label for="curp">CURP:</label>
        <input type="text" name="curp" id="curp" required>

        <label for="posicion">Posición:</label>
        <select name="posicion" id="posicion" required>
            <option value="">Seleccione una opción</option>
            <option value="Delantero">Pitcher</option>
            <option value="Mediocampista">Receptor</option>
            <option value="Defensa">1ra Base</option>
            <option value="Defensa">2da Base</option>
            <option value="Defensa">3ra Base</option>
            <option value="Defensa">Short Stop</option>
            <option value="Defensa">Jardinero Izquierdo</option>
            <option value="Defensa">Jardinero Central </option>
            <option value="Defensa">Jardinero Derecho</option>
        </select>

        <label for="golpea">Bateo Dominante:</label>
        <select name="golpea" id="golpea" required>
            <option value="">Seleccione una opción</option>
            <option value="Derecho">Derecho</option>
            <option value="Izquierdo">Izquierdo</option>
            <option value="Ambidiestro">Ambidiestro</option>
        </select>

        <label for="tira">Lanza Dominante:</label>
        <select name="tira" id="tira" required>
            <option value="">Seleccione una opción</option>
            <option value="Derecho">Derecho</option>
            <option value="Izquierdo">Izquierdo</option>
            <option value="Ambidiestro">Ambidiestro</option>
        </select>

        <label for="pagina">Página Web:</label>
        <input type="url" name="pagina" id="pagina">

        <label for="abreviacion">Abreviación:</label>
        <input type="text" name="abreviacion" id="abreviacion">

        <label for="status">Estatus:</label>
        <select name="status" id="status" required>
            <option value="">Seleccione una opción</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>

        <label for="rama">Rama:</label>
        <select name="status" id="status" required>
            <option value="">Seleccione una opción</option>
            <option value="Activo">Femenil</option>
            <option value="Inactivo">Varonil</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>