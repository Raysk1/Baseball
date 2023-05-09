@extends('default')
@section('title')
    Editar juegos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('juegosUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idJuego" class="form-label">ID de Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos['juego']->idJuego }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idTemporada" class="form-label">Temporada:</label>
                        <select name="idTemporada" id="idTemporada" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['temporadas'] as $temporada)
                                <option value={{ $temporada->idTemporada }}
                                    {{ $datos['juego']->idTemporada == $temporada->idTemporada ? 'selected' : '' }}>
                                    {{ $temporada->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="jornada" class="form-label">Jornada:</label>
                        <input type="text" name="jornada" class="form-control" id="jornada" required
                            value={{ $datos['juego']->jornada }}>
                    </div>
                    <div class="col">
                        <label for="idCampo" class="form-label">Campo:</label>
                        <select name="idCampo" id="idCampo" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['campos'] as $campo)
                                <option value={{ $campo->idCampo }}
                                    {{ $datos['juego']->idCampo == $campo->idCampo ? 'Selected' : '' }}>
                                    {{ $campo->descripcion }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" id="fecha" required
                            value={{ $datos['juego']->fecha }}>
                    </div>
                    <div class="col">
                        <label for="hora" class="form-label">Hora:</label>
                        <input type="time" name="hora" class="form-control" id="hora" required
                            value={{ $datos['juego']->hora }}>

                    </div>
                    <div class="col">
                        <label for="clima" class="form-label">Clima:</label>
                        <select name="clima" id="clima" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Soleado" {{ $datos['juego']->clima == 'Soleado' ? 'selected' : '' }}>
                                Soleado
                            </option>
                            <option value="Nublado" {{ $datos['juego']->clima == 'Nublado' ? 'selected' : '' }}>
                                Nublado
                            </option>
                            <option value="Lluvioso" {{ $datos['juego']->clima == 'Lluvioso' ? 'selected' : '' }}>
                                Lluvioso
                            </option>
                            <option value="Despejado" {{ $datos['juego']->clima == 'Despejado' ? 'selected' : '' }}>
                                Despejado
                            </option>

                        </select>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idEquipoVisitante" class="form-label">Equipo Visitante:</label>
                        <select name="idEquipoVisitante" id="idEquipoVisitante" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['equipos'] as $equipo)
                                <option value={{ $equipo->idEquipo }}
                                    {{ $datos['juego']->idEquipoVisitante == $equipo->idEquipo ? 'selected' : '' }}>
                                    {{ $equipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="idEquipoLocal" class="form-label">Equipo Local:</label>
                        <select name="idEquipoLocal" id="idEquipoLocal" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            @foreach ($datos['equipos'] as $equipo)
                                <option value={{ $equipo->idEquipo }}
                                    {{ $datos['juego']->idEquipoLocal == $equipo->idEquipo ? 'selected' : '' }}>
                                    {{ $equipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="final" class="form-label">Final:</label>
                        <input type="text" name="final" class="form-control" id="final" required
                            value={{ $datos['juego']->final }}>
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
