@extends('default')
@section('title')
    Editar de Lanzadores
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
                                value={{ $datos['lanzador']->idLanzadores }} readonly>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idJuego" class="form-label">ID Juego:</label>
                            <input type="text" class="form-control" name="idJuego" id="idJuego" required
                                value={{ $datos['lanzador']->juego->idJuego }} readonly>
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
                            <input type="number" class="form-control" name="IP" min="0"
                                value={{ $datos['lanzador']->IP }} id="IP" required>
                        </div>
                        <div class="col">
                            <label for="BA" class="form-label">BA:</label>
                            <input type="number" name="BA" class="form-control" value={{ $datos['lanzador']->BA }}
                                min="0" id="BA" required>
                        </div>

                        <div class="col">
                            <label for="C" class="form-label">C:</label>
                            <input type="number" name="C" class="form-control" min="0" id="C"
                                value={{ $datos['lanzador']->C }} required>
                        </div>
                        <div class="col">
                            <label for="H" class="form-label">H:</label>
                            <input type="number" class="form-control" min="0" name="H" id="H"
                                value={{ $datos['lanzador']->H }} required>
                        </div>
                        <div class="col">
                            <label for="BB" class="form-label">BB:</label>
                            <input type="number" name="BB" class="form-control" min="0"
                                value={{ $datos['lanzador']->BB }} id="BB" required>
                        </div>

                        <div class="col">
                            <label for="K" class="form-label">K:</label>
                            <input type="number" name="K" class="form-control" min="0" id="K"
                                value={{ $datos['lanzador']->K }} required>
                        </div>
                        <div class="col">
                            <label for="PCA" class="form-label">PCA:</label>
                            <input type="number" class="form-control" name="PCA" min="0" id="PCA"
                                value={{ $datos['lanzador']->PCA }} required>
                        </div>
                        <div class="col">
                            <label for="POP" class="form-label">POP:</label>
                            <input type="number" name="POP" class="form-control" min="0" id="POP"
                                value={{ $datos['lanzador']->POP }} required>
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
