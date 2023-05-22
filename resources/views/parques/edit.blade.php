@extends('default')
@section('title')
    Editar Parques
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('parquesUpdate') }} method="post">
                @csrf
                <h1>Editar parque</h1>

                <div class="col justify-content-center"">
                    <div class="row mb-2">
                        <label for="idCampo" class="form-label">ID parque:</label>
                        <input type="number" name="idCampo" class="form-control" id="idCampo" required
                            value={{ $parque->idCampo }} readonly>
                    </div>

                    <div class="row mb-2">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion"
                            value='{{ $parque->descripcion }}' required>
                    </div><br>

                    <div class="row mb-2">
                            <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
