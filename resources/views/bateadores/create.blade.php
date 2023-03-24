@extends('default')
@section('title')
    bateadores 
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('bateadoresStore') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idJuego" class="form-label">ID del juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Afiliacion:</label>
                        <input type="text" class="form-control" name="idAfiliacion" id="idAfiliacion" required>
                    </div>
                    <div class="col">
                        <label for="presidente" class="form-label">Presidente:</label>
                        <input type="text" name="presidente" class="form-control" id="presidente" required>
                    </div>
                    <div class="col">
                        <label for="AB" class="form-label">AB:</label>
                        <input type="text" name="AB" class="form-control" id="AB">
                    </div>
            

                    <div class="col">
                        <label for="C" class="form-label">C:</label>
                        <input type="text" name="C" class="form-control" id="C" required>
                    </div>
                    <div class="col">
                        <label for="H" class="form-label">H:</label>
                        <input type="text" name="H" class="form-control" id="H" required>
                    </div>
                    <div class="col">
                        <label for="CP" class="form-label">CP:</label>
                        <input type="NUMERIC" name="CP" class="form-control" id="CP" required>
                    </div>
                    <div class="col">
                        <label for="BB" class="form-label">BB</label>
                        <input type="text" name="BB" class="form-control" id="BB" required>
                    </div>
                    <div class="col">
                        <label for="K" class="form-label">K</label>
                        <input type="text" name="K" class="form-control" id="K" required>
                    </div>
                    <div class="col">
                        <label for="PJE" class="form-label">PJE</label>
                        <input type="text" name="PJE" class="form-control" id="PJE" required>
                    </div>
                    <div class="col">
                        <label for="OBP" class="form-label">OBP</label>
                        <input type="text" name="OBP" class="form-control" id="OBP" required>
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
