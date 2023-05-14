@extends('default')
@section('title')
    Alta de Ampayers Juego
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('AmpayersJuegoStore') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idCuerpo" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="idCuerpo" id="idCuerpo" required @readonly(true)
                            value={{ $datos['lastId'] }}>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego"
                            value={{ $datos['juegoId'] }} required @readonly(true)>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idAmpayer" class="form-label">Ampayer:</label>
                        <select type="text" name="idAmpayer" class="form-select" id="idAmpayer" required>
                            @foreach ($datos['ampayers'] as $a)
                                <option value={{ $a->idAmpayer }}>{{ $a->nombre . ' ' . $a->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="ubicacion" class="form-label">Ubicacion:</label>
                        <select type="text" name="ubicacion" class="form-select" id="ubicacion" required>
                            <option value="C">C</option>
                            <option value="P">P</option>
                            <option value="1B">1B</option>
                            <option value="2B">2B</option>
                            <option value="3B">3B</option>
                            <option value="SS">SS</option>
                            <option value="LF">LF</option>
                            <option value="CF">CF</option>
                            <option value="RF">RF</option>
                            <option value="DE">DE</option>
                            <option value="BC">BC</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
