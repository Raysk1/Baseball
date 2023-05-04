@extends('default')
@section('title')
    Alta de Rooster
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('RoosterStore') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idRoster" class="form-label">ID Rooster:</label>
                        <input type="text" class="form-control" name="idRoster" id="idRoster" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idEquipo" class="form-label">Equipo:</label>
                        <input type="text" class="form-control" name="idEquipo" id="idEquipo" required>
                    </div>
                    <div class="col">
                        <label for="idTemporada" class="form-label">Temporada:</label>
                        <input type="text" name="idTemporada" class="form-control" id="idTemporada" required>
                    </div>
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Afiliacion:</label>
                        <input type="text" name="idAfiliacion" class="form-control" id="idAfiliacion" required>
                    </div>
                </div>
               
              
                <div class="row">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
