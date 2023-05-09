@extends('default')
@section('title')
    Editar Entradas
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('EntradaUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="idCarrera" id="idCarrera" value={{$datos->idCarrera}} readonly required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID de Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos->idJuego }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="entradaAlta" class="form-label">Entradas Altas:</label>
                        <input type="number" class="form-control" name="entradaAlta" id="entradaAlta" max="99"
                            min="0" required value={{ $datos->entradaAlta }}>
                    </div>
                    <div class="col">
                        <label for="entradaBaja" class="form-label">Entradas Bajas:</label>
                        <input type="number" name="entradaBaja" class="form-control" id="entradaBaja" max="99"
                            min="0" required value={{ $datos->entradaBaja }}>
                    </div>
                    <div class="col">
                        <label for="carrerasAlta" class="form-label">Carrreras Altas:</label>
                        <input type="number" name="carrerasAlta" class="form-control" id="carrerasAlta" max="99"
                            min="0" required value={{ $datos->carrerasAlta }}>
                    </div>
                    <div class="col">
                        <label for="carrerasBaja" class="form-label">Carreras Bajas:</label>
                        <input type="number" name="carrerasBaja" class="form-control" id="carrerasBaja" max="99"
                            min="0" required value={{ $datos->carrerasBaja }}>
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">guardar</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
