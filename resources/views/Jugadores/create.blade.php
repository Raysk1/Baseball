@extends('default')
@section('title')
    Alta de jugador
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('jugadoresStore') }} method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idAfiliacion" class="form-label">ID de Afiliación:</label>
                        <input type="text" class="form-control" name="idAfiliacion" id="idAfiliacion" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="col">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos" required>
                    </div>
                    <div class="col">
                        <label for="abreviacion" class="form-label">Abreviación:</label>
                        <input type="text" name="abreviacion" class="form-control" id="abreviacion">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" required>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">CURP:</label>
                        <input type="text" name="curp" class="form-control" id="curp" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="posicion" class="form-label">Posición:</label>
                        <select name="posicion" id="posicion" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1">Pitcher</option>
                            <option value="2">Receptor</option>
                            <option value="3">1ra Base</option>
                            <option value="4">2da Base</option>
                            <option value="6">3ra Base</option>
                            <option value="5">Short Stop</option>
                            <option value="7">Jardinero Izquierdo</option>
                            <option value="8">Jardinero Central </option>
                            <option value="9">Jardinero Derecho</option>
                            <option value="10">Bateador designado</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="golpea" class="form-label">Bateo Dominante:</label>
                        <select name="golpea" id="golpea" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Derecho">Derecho</option>
                            <option value="Izquierdo">Izquierdo</option>
                            <option value="Ambidiestro">Ambidiestro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="tira" class="form-label">Lanza Dominante:</label>
                        <select name="tira" id="tira" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Derecho">Derecho</option>
                            <option value="Izquierdo">Izquierdo</option>
                            <option value="Ambidiestro">Ambidiestro</option>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="mb-3">
                        <label for="pagina" class="form-label">Página Web:</label>
                        <input type="url" name="pagina" id="pagina" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="status" class="form-label">Estatus:</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="rama" class="form-label">Rama:</label>
                        <select name="rama" id="rama" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Femenil">Femenil</option>
                            <option value="Varonil">Varonil</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="imagen" class="form-label">Imagen:</label>

                        <input type="file" name="imagen" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
