@extends('default')
@section('title')
    Alta de Ampayers Juego
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('AmpayersJuegoStore') }} method="post">
                @csrf
                <div class="row mb-3">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">AMPAYERS JUEGO</h1><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idCuerpo" class="form-label">ID:</label>
                            <input type="text" class="form-control" name="idCuerpo" id="idCuerpo" required
                                @readonly(true) value="{{$lastId}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idJuego" class="form-label">ID Juego:</label>
                            <input type="text" class="form-control" name="idJuego" id="idJuego" required
                                @readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idAmpayer" class="form-label">ID Ampayer:</label>
                            <input type="text" name="idAmpayer" class="form-control" id="idAmpayer" required
                                @readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idCuerpo" class="form-label">ID Cuerpo:</label>
                            <input type="text" name="idCuerpo" class="form-control" id="idCuerpo" required
                                @readonly(true)>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ubicacion" class="form-label">Ubicacion:</label>
                            <input type="text" name="ubicacion" class="form-control" id="ubiacion" required>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col justify-content-center"><br><br>
                            <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
