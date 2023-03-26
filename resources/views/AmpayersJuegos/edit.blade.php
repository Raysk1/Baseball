@extends('default')
@section('title')
    Editar Ampayer
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('AmpayersJuegoUpdate') }} method="post">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                        <label for="idAmpayer" class="form-label">ID Ampayer:</label>
                        <input type="text" class="form-control" name="idAmpayer" id="idAmpayer" required readonly
                            value={{ $datos->idAmpayer }}>
                    </div>

                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="text" name="idJuego" class="form-control" id="idJuego" required readonly
                            value={{ $datos->idJuego }}>
                    </div>

                    <div class="col">
                        <label for="ubicacion" class="form-label">ubicacion:</label>
                        <input type="text" name="ubicacion" class="form-control" id="ubicacion" required readonly
                            value={{ $datos->ubicacion }}>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
