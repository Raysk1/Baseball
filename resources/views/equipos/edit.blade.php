@extends('default')
@section('title')
    Editar Equipos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('equiposUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idEquipo" class="form-label">ID de Equipo:</label>
                        <input type="text" class="form-control" name="idAmpayer" id="idAmpayer" required
                            value={{ $datos->idEquipo }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required
                            value={{ $datos->nombre }}>
                    </div>
                    <div class="col">
                        <label for="idLogo" class="form-label">IdLogo:</label>
                        <input type="text" name="idLogo" class="form-control" id="idLogo" required
                            value={{ $datos->idLogo }}>
                    </div>
                    <div class="col">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad"
                            value={{ $datos->ciudad }}>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idTecnico" class="form-label">idTecnico:</label>
                        <input type="text" name="idTecnico" class="form-control" id="idTecnico"   
                            value={{ $datos->idTecnico }}>
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
