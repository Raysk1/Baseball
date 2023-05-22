@extends('default')
@section('title')
    Editar Temporada
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('TemporadasUpdate') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idTemporada" class="form-label">ID de Temporada:</label>
                        <input type="text" class="form-control" name="idTemporada" id="idTemporada" required
                            value={{ $datos-> idTemporada }} >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idLiga" class="form-label">Liga:</label>
                        <input type="text" class="form-control" name="idLiga" id="idLiga" 
                        value={{ $datos-> idLiga }} >
                            
                    </div>
                    <div class="col">
                        <label for="grupo" class="form-label">Grupo:</label>
                        <input type="text" name="grupo" class="form-control" id="grupo"
                            value={{ $datos-> grupo }} >
                    </div>
                    <div class="col">
                        <label for="categoria" class="form-label">Categoria:</label>
                        <input type="text" name="categoria" class="form-control" id="categoria"
                            value={{ $datos-> categoria }} >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="momento" class="form-label">Momento:</label>
                        <input type="text" name="momento" class="form-control" id="momento"
                            value={{ $datos-> momento }} >
                    </div>
                    <div class="col">
                        <label for="temporada" class="form-label">Temporada:</label>
                        <input type="text" name="temporada" class="form-control" id="temporada" 
                        value={{ $datos-> temporada }}>
                    </div>
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" 
                        value={{ $datos-> nombre }}>
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
