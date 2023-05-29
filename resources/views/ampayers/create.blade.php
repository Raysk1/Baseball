@extends('default')
@section('title')
    Alta de Ampayers
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('AmpayersStore') }} method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-2">
                        <label for="idAmpayer" class="form-label">ID de Ampayer:</label>
                        <input type="text" class="form-control" name="idAmpayer" id="idAmpayer" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
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
                <div class="row mb-2">
                    <div class="col">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento" required>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">CURP:</label>
                        <input type="text" name="curp" class="form-control" id="curp" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="activo" class="form-label">Estatus:</label>
                        <select name="activo" id="activo" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="{{true}}">Activo</option>
                            <option value="{{false}}">Inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="imagen" class="form-label">Imagen:</label>

                        <input type="file" name="imagen" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
