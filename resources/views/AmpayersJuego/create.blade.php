@extends('default')
@section('title')
    Alta de Ampayers Juego
@endsection

@section('content')
    <form action={{ route('AmpayersJuegoStore') }} method="post">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="idJuego" class="form-label">ID Juego:</label>
                <input type="text" class="form-control" name="idJuego" id="idJuego" required readonly>
            </div>
            <div class="col">
                <label for="idAmpayer" class="form-label">ID Ampayer:</label>
                <input type="text" name="idAmpayer" class="form-control" id="idAmpayer" required readonly>
            </div>
            <div class="col">
                <label for="ubicacion" class="form-label">Ubicacion:</label>
                <input type="text" name="ubicacion" class="form-control" id="ubiacion" required>
            </div>
        </div>
    </form>

@endsection
