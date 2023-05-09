@extends('default')
@section('title')
    Editar Rooster
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('RosterUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idRoster" class="form-label">ID Rooster:</label>
                        <input type="number" class="form-control" name="idRoster" id="idRoster" required
                            value={{ $datos->idRoster }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idEquipo" class="form-label">Equipo:</label>
                        <input type="number" class="form-control" name="idEquipo" id="idEquipo" required
                            value={{ $datos->idEquipo }}>
                    </div>
                    <div class="col">
                        <label for="idTemporada" class="form-label">Temporada:</label>
                        <input type="number" name="idTemporada" class="form-control" id="idTemporada" required
                            value={{ $datos->idTemporada }}>
                    </div>
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Afiliacion:</label>
                        <input type="number" name="idAfiliacion" class="form-control" id="idAfiliacion" required
                            value={{ $datos->idAfiliacion }}>
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
