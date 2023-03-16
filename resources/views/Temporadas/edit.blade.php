@extends('default')
@section('title')
    Editar Temporada
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('TemporadasUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idTemporada" class="form-label">ID de Temporada:</label>
                        <input type="text" class="form-control" name="idTemporada" id="idTemporada" required
                            value={{ $datos-> idTemporada }} >
                    </div>
                </div>
                <div class="row mb-3">
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
                            value={{ $datos-> abreviacion }} >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="momento" class="form-label">Momento:</label>
                        <input type="date" name="momento" class="form-control" id="momento"
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
                <div class="row mb-3">
                    <div class="col">
                        <label for="posicion" class="form-label">Posición:</label>
                        <select name="posicion" id="posicion" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1" {{ $datos->posicion == 1 ? 'selected' : '' }}>Pitcher</option>
                            <option value="2" {{ $datos->posicion == 2 ? 'selected' : '' }}>Receptor</option>
                            <option value="3" {{ $datos->posicion == 3 ? 'selected' : '' }}>1ra Base</option>
                            <option value="4" {{ $datos->posicion == 4 ? 'selected' : '' }}>2da Base</option>
                            <option value="6"{{ $datos->posicion == 6 ? 'selected' : '' }}>3ra Base</option>
                            <option value="5"{{ $datos->posicion == 5 ? 'selected' : '' }}>Short Stop</option>
                            <option value="7"{{ $datos->posicion == 7 ? 'selected' : '' }}>Jardinero Izquierdo
                            </option>
                            <option value="8"{{ $datos->posicion == 8 ? 'selected' : '' }}>Jardinero Central </option>
                            <option value="9"{{ $datos->posicion == 9 ? 'selected' : '' }}>Jardinero Derecho</option>
                            <option value="10"{{ $datos->posicion == 10 ? 'selected' : '' }}>Bateador designado
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="golpea" class="form-label">Bateo Dominante:</label>
                        <select name="golpea" id="golpea" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Derecho" {{ $datos->golpea == 'Derecho' ? 'selected' : '' }}>Derecho</option>
                            <option value="Izquierdo" {{ $datos->golpea == 'Izquierdo' ? 'selected' : '' }}>Izquierdo
                            </option>
                            <option value="Ambidiestro" {{ $datos->golpea == 'Ambidiestro' ? 'selected' : '' }}>Ambidiestro
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="tira" class="form-label">Lanza Dominante:</label>
                        <select name="tira" id="tira" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Derecho" {{ $datos->tira == 'Derecho' ? 'selected' : '' }}>Derecho</option>
                            <option value="Izquierdo" {{ $datos->tira == 'Izquierdo' ? 'selected' : '' }}>Izquierdo
                            </option>
                            <option value="Ambidiestro" {{ $datos->tira == 'Ambidiestro' ? 'selected' : '' }}>Ambidiestro
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="mb-3">
                        <label for="pagina" class="form-label">Página Web:</label>
                        <input type="url" name="pagina" id="pagina" class="form-control"
                            value={{ $datos->pagina }}>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="status" class="form-label">Estatus:</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1" {{ $datos->status == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $datos->status == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="rama" class="form-label">Rama:</label>
                        <select name="rama" id="rama" class="form-select" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Femenil" {{ $datos->rama == 'Femenil' ? 'selected' : '' }}>Femenil</option>
                            <option value="Varonil" {{ $datos->rama == 'Varonil' ? 'selected' : '' }}>Varonil</option>
                        </select>
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
