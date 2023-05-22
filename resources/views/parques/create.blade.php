@extends('default')
@section('title')
    Alta de Parques
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('parquesStore') }} method="post">
                @csrf
                <h1>Crear Parque</h1>

                <div class="col">
                    <div class="row mb-2">
                        <label for="idCampo" class="form-label">ID Parque:</label>
                        <input type="text" class="form-control" name="idCampo" id="idCampo" required
                            value={{ $lastId }} readonly>
                    </div>
                    <div class="row mb-2">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                    </div><br>

                    <div class="row mb-2">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
