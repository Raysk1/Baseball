@extends('default')
@section('title')
    Alta de juegos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('juegosStore') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idJuego" class="form-label">ID de Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idTemporada" class="form-label">ID de la Temporada:</label>
                        <input type="text" class="form-control" name="idTemporada" id="idTemporada" required>
                    </div>
                    <div class="col">
                        <label for="jornada" class="form-label">Jornada:</label>
                        <input type="text" name="jornada" class="form-control" id="jornada" required>
                    </div>
                    <div class="col">
                        <label for="idCampo" class="form-label">ID del Campo:</label>
                        <input type="text" name="idCampo" class="form-control" id="idCampo">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="Fecha" class="form-label">Fecha:</label>
                        <input type="date" name="Fecha" class="form-control" id="Fecha" required>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">Hora:</label>
                        <input type="time" name="curp" class="form-control" id="curp" required>
                    </div>
                    <div class="col">
                        <label for="clima" class="form-label">Clima:</label>
                        <input type="text" name="clima" class="form-control" id="clima" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idEquipoVisitante" class="form-label">ID Equipo Visitante:</label>
                        <input type="text" name="idEquipoVisitante" class="form-control" id="idEquipoVisitante" required>
                    </div>
                    <div class="col">
                        <label for="idEquipoLocal" class="form-label">ID Equipo Local:</label>
                        <input type="text" name="idEquipoLocal" class="form-control" id="idEquipoLocal" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="final" class="form-label">Final:</label>
                        <input type="text" name="final" class="form-control" id="final" required>
                    </div>
                    <div class="col">
                        <label for="idAviso" class="form-label">Aviso:</label>
                        <input type="text" name="idAviso" class="form-control" id="idAviso" required>
                       
                    </div>
                    <div class="col">
                        <label for="idCuerpo" class="form-label">Cuerpo:</label>
                        <input type="text" name="idCuerpo" class="form-control" id="idCuerpo" required>
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
