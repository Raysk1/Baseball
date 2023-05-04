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
                        <input type="text" class="form-control" name="idJuego" id="idJuego" value={{ $datos['lastId'] }}
                            readonly required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idTemporada" class="form-label">Temporada:</label>
                        <select name="idTemporada" id="idTemporada" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['temporadas'] as $temporada)
                                <option value={{$temporada->idTemporada}}>{{$temporada->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="jornada" class="form-label">Jornada:</label>
                        <input type="text" name="jornada" class="form-control" id="jornada" required>
                    </div>
                    <div class="col">
                        <label for="idCampo" class="form-label">Campo:</label>
                        <select name="idCampo" id="idCampo" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['campos'] as $campo)
                                <option value={{$campo->idCampo}}>{{$campo->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" id="fecha" required>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">Hora:</label>
                        <input type="time" name="curp" class="form-control" id="curp" required>
                    </div>
                    <div class="col">
                        <label for="clima" class="form-label">Clima:</label>
                        <select name="clima" id="clima" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Soleado">Soleado</option>
                            <option value="Nublado">Nublado</option>
                            <option value="Lluvioso">Lluvioso</option>
                            <option value="Despejado">Despejado</option>
                            
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idEquipoVisitante" class="form-label">Equipo Visitante:</label>
                        <select name="idEquipoVisitante" id="idEquipoVisitante" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['equipos'] as $equipo)
                                <option value={{$equipo->idEquipo}}>{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="idEquipoLocal" class="form-label">Equipo Local:</label>
                        <select name="idEquipoLocal" id="idEquipoLocal" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['equipos'] as $equipo)
                                <option value={{$equipo->idEquipo}}>{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="final" class="form-label">Final:</label>
                        <input type="text" name="final" class="form-control" id="final" required>
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
