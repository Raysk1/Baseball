@extends('default')
@section('title')
    Editar Ampayer
@endsection

@section('content')
<div class="d-flex justify-content-center">
    <div class="w-75 mt-4">
        <form action={{ route('EntradaStore') }} method="post">
            @csrf
            <div class="row mb-3">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">EDITAR AMPAYERS JUEGO</h1><br>
                    </div>
                </div>
                <div class="col">
                    <label for="idAmpayer" class="form-label">ID Ampayer:</label>
                    <input type="text" class="form-control" name="idAmpayer" id="idAmpayer" required 
                        value={{ $datos -> idAmpayer }} @readonly(true)>
                </div>

                <div class="col">
                    <label for="idJuego" class="form-label">ID Juego:</label>
                    <input type="text" name="idJuego" class="form-control" id="idJuego" required 
                        value={{ $datos -> idJuego }} @readonly(true)>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="idCuerpo" class="form-label">ID Cuerpo:</label>
                        <input type="text" name="idCuerpo" class="form-control" id="idCuerpo" required 
                        value = {{ $datos -> idCuerpo}} @readonly(true)>

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <label for="ubicacion" class="form-label">Ubicacion:</label>
                    <input type="text" name="ubicacion" class="form-control" id="ubicacion" required
                        value={{ $datos -> ubicacion }}>
                    </div>
                </div>
                
                
                <div class="row">
                   
                    <div class="col justify-content-center"> <br><br> <br><br>
                        <button type="submit" class="btn btn-primary w-100">EDITAR</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
