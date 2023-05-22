@extends('default')
@section('title')
    Editar Jugador
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('jugadoresUpdate') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">ID de Afiliación:</label>
                        <input type="text" class="form-control" name="idAfiliacion" id="idAfiliacion" required
                            value={{ $datos->idAfiliacion }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value={{ $datos->nombre }}
                            required>
                    </div>
                    <div class="col">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" name="apellidos" class="form-control" id="apellidos"
                            value={{ $datos->apellidos }} required>
                    </div>
                    <div class="col">
                        <label for="abreviacion" class="form-label">Abreviación:</label>
                        <input type="text" name="abreviacion" class="form-control" id="abreviacion"
                            value={{ $datos->abreviacion }} required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNacimiento" class="form-control" id="fechaNacimiento"
                            value={{ $datos->fechaNacimiento }} required>
                    </div>
                    <div class="col">
                        <label for="curp" class="form-label">CURP:</label>
                        <input type="text" name="curp" class="form-control" id="curp" value={{ $datos->curp }}
                            required>
                    </div>
                </div>
                <div class="row mb-2">
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
                <div class="row mb-2">
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
                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
