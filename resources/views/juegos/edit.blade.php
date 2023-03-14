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
                            value={{ $datos -> idJuego}} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idTemporada" class="form-label">ID de la Temporada:</label>
                        <input type="text" class="form-control" name="idTemporada" id="idTemporada" required
                        value={{ $datos -> idTemporada}} >
                    </div>
                    <div class="col">
                        <label for="jornada" class="form-label">Jornada:</label>
                        <input type="text" name="jornada" class="form-control" id="jornada" required
                        value={{ $datos -> jornada}} >
                    </div>
                    <div class="col">
                        <label for="idCampo" class="form-label">ID del Campo:</label>
                        <input type="text" name="idCampo" class="form-control" id="idCampo"  
                        value={{ $datos -> idCampo}} >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="Fecha" class="form-label">Fecha:</label>
                        <input type="date" name="Fecha" class="form-control" id="Fecha" required
                        value={{ $datos -> Fecha}} >
                    </div>
                    <div class="col">
                        <label for="hora" class="form-label">Hora:</label>
                        <input type="time" name="hora" class="form-control" id="hora" required
                        value={{ $datos -> hora}} >
                        
                    </div>
                    <div class="col">
                        <label for="clima" class="form-label">Clima:</label>
                        <input type="text" name="clima" class="form-control" id="clima" required
                        value={{ $datos -> clima}} >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="final" class="form-label">Final:</label>
                        <input type="text" name="final" class="form-control" id="final" required
                        value={{ $datos -> final}} >
                    </div>
                    <div class="col">
                        <label for="idAviso" class="form-label">Aviso:</label>
                        <input type="text" name="idAviso" class="form-control" id="idAviso" required
                        value={{ $datos -> idAviso}} >
                    </div>
                    <div class="col">
                        <label for="idCuerpo" class="form-label">Cuerpo:</label>
                        <input type="text" name="idCuerpo" class="form-control" id="idCuerpo" required
                        value={{ $datos -> idCuerpo}} >
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
