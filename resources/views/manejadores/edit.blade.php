@extends('default')
@section('title')
    Editar manejadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('manejadoresUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idTecnico" class="form-label">ID de Tecnico:</label>
                        <input type="text" class="form-control" name="idTecnico" id="idTecnico" required
                            value={{ $datos->idTecnico }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required
                            value={{ $datos->nombre }}>
                    </div>
                    <div class="col">
                        <label for="tipo" class="form-label">Tipo:</label>
                        <input type="text" name="tipo" class="form-control" id="tipo" required
                            value={{ $datos->tipo }}>
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
