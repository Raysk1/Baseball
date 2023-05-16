@extends('default')
@section('title')
    Alta de Turnos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('turnoStore') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idTurno" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="idTurno" id="idTurno" readonly required
                            value={{ $datos['lastId'] }} readonly>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" readonly required
                            value={{ $datos['juegoId'] }} readonly>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Jugador:</label>
                        <select class="form-select" name="idAfiliacion" id="idAfiliacion">
                            @foreach ($datos['jugadores'] as $j)
                                <option value={{ $j->idAfiliacion }}>{{ $j->jugador->nombre . ' ' . $j->jugador->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idLanzador" class="form-label">Lanzador:</label>
                        <select name="idLanzador" id="idLanzador" class="form-select">
                            @foreach ($datos['lanzadores'] as $l)
                                <option value={{ $l->idLanzadores }}>{{ $l->jugador->nombre . ' ' . $l->jugador->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="turno" class="form-label">Turno:</label>
                        <input type="number" min="1" class="form-control" name="turno" id="turno" required>
                    </div>
                    <div class="col">
                        <label for="posicion" class="form-label">Posicion:</label>
                        <input type="number" min="1" class="form-control" name="posicion" id="posicion" required>
                    </div>
                    <div class="col">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <option value="CE">CE</option>
                            <option value="ED">ED</option>
                            <option value="BE">BE</option>
                            <option value="AL">AL</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="inning" class="form-label">Inning:</label>
                        <input min="0" type="number" class="form-control" name="inning" id="inning" required>
                    </div>
                    <div class="col">
                        <label for="carrera" class="form-label">Carrera:</label>
                        <select name="carrera" id="carrera" class="form-select">
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="producciones" class="form-label">Producciones:</label>
                        <input min="0" max="4" type="number" class="form-control" name="producciones"
                            id="producciones" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="resultado" class="form-label">Resultado:</label>
                        <input type="text" class="form-control" name="resultado" id="resultado" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="detalles" class="form-label">Detalles:</label>
                        <textarea name="detalles" id="detalles" cols="30" rows="3" maxlength="20" class="form-control"></textarea>
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
