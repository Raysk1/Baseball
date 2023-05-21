@extends('default')
@section('title')
    bateadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('bateadoresStore') }} method="post">
                @csrf
                <div class="row mb-2">

                    <div class="col">
                        <label for="idBateadores" class="form-label">ID:</label>
                        <input type="text" name="idBateadores" class="form-control" id="idBateadores" required
                            value={{ $datos['lastId'] }} readonly>
                    </div>

                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="number" min="0" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos['juegoId'] }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Jugador:</label>
                        <select class="form-control" name="idAfiliacion" id="idAfiliacion" required>
                            @foreach ($datos['jugadores'] as $j)
                                <option value={{ $j->idAfiliacion }}>{{ $j->nombre . ' ' . $j->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-2">

                    <div class="col">
                        <label for="AB" class="form-label">AB:</label>
                        <input type="number" min="0" name="AB" class="form-control" id="AB">
                    </div>
                    <div class="col">
                        <label for="C" class="form-label">C:</label>
                        <input type="number" min="0" name="C" class="form-control" id="C" required>
                    </div>
                    <div class="col">
                        <label for="H" class="form-label">H:</label>
                        <input type="number" min="0" name="H" class="form-control" id="H" required>
                    </div>
                    <div class="col">
                        <label for="CP" class="form-label">CP:</label>
                        <input type="number" min="0" name="CP" class="form-control" id="CP" required>
                    </div>
                    <div class="col">
                        <label for="BB" class="form-label">BB</label>
                        <input type="number" min="0" name="BB" class="form-control" id="BB" required>
                    </div>
                    <div class="col">
                        <label for="K" class="form-label">K</label>
                        <input type="number" min="0" name="K" class="form-control" id="K" required>
                    </div>
                    <div class="col">
                        <label for="PJE" class="form-label">PJE</label>
                        <input type="number" min="0" name="PJE" class="form-control" id="PJE" required>
                    </div>
                    <div class="col">
                        <label for="OBP" class="form-label">OBP</label>
                        <input type="number" min="0" name="OBP" class="form-control" id="OBP" required>
                    </div>
                   
                </div>

                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
