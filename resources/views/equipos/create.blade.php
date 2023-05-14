@extends('default')
@section('title')
    Alta de Equipos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('EquiposStore') }} method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idEquipo" class="form-label">ID de Equipo:</label>
                        <input type="text" class="form-control" name="idEquipo" id="idEquipo" required
                            value={{ $datos["lastId"] }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>

                    <div class="col">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idTecnico" class="form-label">Manejador:</label>
                       <select class="form-select" name="idTecnico" id="idTecnico">
                        @foreach ($datos["manejadores"] as $manejador )
                            <option value={{$manejador->idTecnico}}>{{$manejador->nombre . " " . $manejador->apellidos}}</option>
                        @endforeach
                       </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="imagen" class="form-label">Imagen:</label>

                        <input type="file" id="imagen" name="imagen" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
