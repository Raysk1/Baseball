@extends('default')
@section('title')
    Alta de Temporada
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('TemporadasStore') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idTemporada" class="form-label">ID de la Temporada:</label>
                        <input type="text" class="form-control" name="idTemporada" id="idTemporada" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idLiga" class="form-label">id de la liga:</label>
                        <input type="text" class="form-control" name="idLiga" id="idLiga" required>
                    </div>
                    <div class="col">
                        <label for="grupo" class="form-label">Grupo:</label>
                        <input type="text" name="grupo" class="form-control" id="grupo" required>
                    </div>
                    <div class="col">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <input type="text" name="categoria" class="form-control" id="categoria">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="momento" class="form-label">Momento:</label>
                        <input type="text" name="momento" class="form-control" id="momento" required>
                    </div>
                    <div class="col">
                        <label for="temporada" class="form-label">Temporada:</label>
                        <input type="text" name="temporada" class="form-control" id="temporada" required>
                    </div>
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" required>
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
