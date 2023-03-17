@extends('default')
@section('title')
    Alta de Manejadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('manejadoresStore') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idEquipo" class="form-label">ID de Equipo:</label>
                        <input type="text" class="form-control" name="idEquipo" id="idEquipo" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="col">
                        <label for="tipo" class="form-label">tipo:</label>
                        <input type="text" name="tipo" class="form-control" id="tipo" required>
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
