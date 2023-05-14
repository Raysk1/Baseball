@extends('default')
@section('title')
    Alta de Lanzadores
@endsection

@section('content')
    <form action={{ route('LanzadorStore') }} method="post">
        @csrf
        <div class="d-flex justify-content-center">
            <div class="w-75 mt-4">
                <form action={{ 'LanzadorUpdate' }} method="POST">

                    <div class="row mb-2">

                        <div class="col">
                            <label for="idLanzadores" class="form-label">ID:</label>
                            <input type="text" name="idLanzadores" class="form-control" id="idLanzadores" required
                                value={{ $datos['lastId'] }} readonly>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idJuego" class="form-label">ID Juego:</label>
                            <input type="text" class="form-control" name="idJuego" id="idJuego" required
                                value={{ $datos['juegoId'] }} readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idAfiliacion" class="form-label">Jugador:</label>
                            <select class="form-control" name="idAfiliacion" id="idAfiliacion" required>
                                @foreach ($datos['jugadores'] as $j)
                                    <option value={{ $j->idAfiliacion }}>{{ $j->nombre . ' ' . $j->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">


                        <div class="col">
                            <label for="IP" class="form-label">IP:</label>
                            <input type="number" class="form-control" min="0" name="IP" id="IP"
                                required>
                        </div>
                        <div class="col">
                            <label for="BA" class="form-label">BA:</label>
                            <input type="number" name="BA" min="0" class="form-control" id="BA"
                                required>
                        </div>

                        <div class="col">
                            <label for="C" class="form-label">C:</label>
                            <input type="number" name="C" min="0" class="form-control" id="C"
                                required>
                        </div>
                        <div class="col">
                            <label for="H" class="form-label">H:</label>
                            <input type="number" min="0" class="form-control" name="H" id="H"
                                required>
                        </div>
                        <div class="col">
                            <label for="BB" class="form-label">BB:</label>
                            <input type="number" min="0" name="BB" class="form-control" id="BB"
                                required>
                        </div>

                        <div class="col">
                            <label for="K" class="form-label">K:</label>
                            <input type="number" min="0" name="K" class="form-control" id="K"
                                required>
                        </div>
                        <div class="col">
                            <label for="PCA" class="form-label">PCA:</label>
                            <input type="number" min="0" class="form-control" name="PCA" id="PCA"
                                required>
                        </div>
                        <div class="col">
                            <label for="POP" class="form-label">POP:</label>
                            <input type="number" min="0" name="POP" class="form-control" id="POP"
                                required>
                        </div>


                    </div>
                    <div class="row mb-2">
                        <div class="col justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">GUARDAR</button>
                        </div>
                    </div>
            </div>
    </form>
@endsection
