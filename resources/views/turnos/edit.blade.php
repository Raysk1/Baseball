@extends('default')
@section('title')
    Editar Turnos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('turnoUpdate') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idTurno" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="idTurno" id="idTurno" readonly required
                            value={{ $datos['turno']->idTurno }} readonly>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" readonly required
                            value={{ $datos['turno']->idJuego }} readonly>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Jugador:</label>
                        <select class="form-select" name="idAfiliacion" id="idAfiliacion">
                            @foreach ($datos['jugadores'] as $j)
                                <option value={{ $j->idAfiliacion }}
                                    {{ $datos['turno']->idAfiliacion == $j->idAfiliacion ? 'selected' : '' }}>
                                    {{ $j->nombre . ' ' . $j->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idLanzador" class="form-label">Lanzador:</label>
                        <select name="idLanzador" id="idLanzador" class="form-select">
                            @foreach ($datos['lanzadores'] as $l)
                                <option value={{ $l->idLanzadores }}
                                    {{ $datos['turno']->idLanzadores == $l->idLanzador ? 'selected' : '' }}>
                                    {{ $l->jugador->nombre . ' ' . $l->jugador->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="turno" class="form-label">Turno:</label>
                        <input type="number" min="1" class="form-control" name="turno" id="turno"
                            value={{ $datos['turno']->turno }} required>
                    </div>
                    <div class="col">
                        <label for="posicion" class="form-label">Posicion:</label>
                        <input type="number" min="1" class="form-control" name="posicion" id="posicion"
                            value={{ $datos['turno']->posicion }} required>
                    </div>
                    <div class="col">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <option {{ $datos['turno']->tipo == 'CE' ? 'selected' : '' }} value="CE">CE</option>
                            <option {{ $datos['turno']->tipo == 'ED' ? 'selected' : '' }} value="ED">ED</option>
                            <option {{ $datos['turno']->tipo == 'BE' ? 'selected' : '' }} value="BE">BE</option>
                            <option {{ $datos['turno']->tipo == 'AL' ? 'selected' : '' }} value="AL">AL</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="inning" class="form-label">Inning:</label>
                        <input min="0" type="number" class="form-control" name="inning" id="inning"
                            value={{ $datos['turno']->inning }} required>
                    </div>
                    <div class="col">
                        <label for="carrera" class="form-label">Carrera:</label>
                        <select name="carrera" id="carrera" class="form-select">
                            <option {{ $datos['turno']->carrera ? 'selected' : '' }} value="0">No</option>
                            <option {{ $datos['turno']->carrera ? 'selected' : '' }} value="1">Si</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="producciones" class="form-label">Producciones:</label>
                        <input min="0" max="4" type="number" class="form-control" name="producciones"
                            id="producciones" value={{ $datos['turno']->producciones }} required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="resultado" class="form-label">Resultado:</label>
                        <input type="text" class="form-control" name="resultado" id="resultado"
                            value={{ $datos['turno']->resultado }} required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="detalles" class="form-label">Detalles:</label>
                        <textarea name="detalles" id="detalles" cols="30" rows="3" maxlength="20" class="form-control"
                            value={{ $datos['turno']->detalles }}></textarea>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
