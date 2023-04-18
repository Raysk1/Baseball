@extends('default')
@section('title')
    Editar Lanzadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('LanzadorUpdate') }} method="post">
                @csrf

                <div class="row mb-3">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">EDITAR LANZADORES</h1><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idLanzadores" class="form-label">ID Lanzadores:</label>
                            <input type="text" name="idLanzadores" class="form-control" id="idLanzadores" required
                                value={{ $datos->idLanzadores }} @readonly(true)>
                        </div>
                    </div>
                    <div class="col">
                        <label for="idJuego" class="form-label">ID Juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos->idJuego }} @readonly(true)>
                    </div>

                    <div class="col">
                        <label for="idAfiliacion" class="form-label">ID Afiliacion:</label>
                        <input type="text" name="idAfiliacion" class="form-control" id="idAfiliacion" required
                            value={{ $datos->idAfiliacion }} @readonly(true)>
                    </div>


                    <div class="row">
                        <div class="col">
                            <label for="IP" class="form-label">IP:</label>
                            <input type="text" name="IP" class="form-control" id="IP" required
                                value={{ $datos->IP }}>
                        </div>
                        <div class="col">
                            <label for="BA" class="form-label">BA:</label>
                            <input type="text" name="BA" class="form-control" id="BA" required
                                value={{ $datos->BA }}>
                        </div>
                        <div class="col">
                            <label for="C" class="form-label">C:</label>
                            <input type="text" name="C" class="form-control" id="C" required
                                value={{ $datos->C }}>
                        </div>
                        <div class="col">
                            <label for="H" class="form-label">H:</label>
                            <input type="text" name="H" class="form-control" id="H" required
                                value={{ $datos->H }}>
                        </div>
                        <div class="col">
                            <label for="BB" class="form-label">BB:</label>
                            <input type="text" name="BB" class="form-control" id="BB" required
                                value={{ $datos->BB }}>
                        </div>
                        <div class="col">
                            <label for="K" class="form-label">K:</label>
                            <input type="text" name="K" class="form-control" id="K" required
                                value={{ $datos->K }}>
                        </div>
                        <div class="col">
                            <label for="PCA" class="form-label">PCA:</label>
                            <input type="text" name="PCA" class="form-control" id="PCA" required
                                value={{ $datos->PCA }}>
                        </div>
                        <div class="col">
                            <label for="POP" class="form-label">POP:</label>
                            <input type="text" name="POP" class="form-control" id="POP" required
                                value={{ $datos->POP }}>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col justify-content-center"> <br><br> <br><br>
                            <button type="submit" class="btn btn-primary w-100">EDITAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
