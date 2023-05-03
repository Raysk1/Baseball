@extends('default')
@section('title')
    Editar bateadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('bateadoresUpdate') }} method="post">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="idJuego" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos['bateador']->idJuego }} readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Jugador:</label>
                        <select class="form-control" name="idAfiliacion" id="idAfiliacion" required>
                            @foreach ($datos['jugadores'] as $j)
                                <option value={{ $j->idAfiliacion }}
                                    {{ $datos['bateador']->idAfiliacion == $j->idAfiliacion ? 'selected' : '' }}>
                                    {{ $j->nombre . ' ' . $j->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col">
                        <label for="AB" class="form-label">AB:</label>
                        <input type="text" name="AB" class="form-control" id="AB" value={{$datos["bateador"]->AB}} required>
                    </div>
                    <div class="col">
                        <label for="C" class="form-label">C:</label>
                        <input type="text" name="C" class="form-control" id="C"  value={{$datos["bateador"]->C}} required>
                    </div>
                    <div class="col">
                        <label for="H" class="form-label">H:</label>
                        <input type="text" name="H" class="form-control" id="H"  value={{$datos["bateador"]->H}} required>
                    </div>
                    <div class="col">
                        <label for="CP" class="form-label">CP:</label>
                        <input type="NUMERIC" name="CP" class="form-control" id="CP"  value={{$datos["bateador"]->CP}} required>
                    </div>
                    <div class="col">
                        <label for="BB" class="form-label">BB</label>
                        <input type="text" name="BB" class="form-control" id="BB"  value={{$datos["bateador"]->BB}} required>
                    </div>
                    <div class="col">
                        <label for="K" class="form-label">K</label>
                        <input type="text" name="K" class="form-control" id="K"  value={{$datos["bateador"]->K}} required>
                    </div>
                    <div class="col">
                        <label for="PJE" class="form-label">PJE</label>
                        <input type="text" name="PJE" class="form-control" id="PJE"  value={{$datos["bateador"]->PJE}} required>
                    </div>
                    <div class="col">
                        <label for="OBP" class="form-label">OBP</label>
                        <input type="text" name="OBP" class="form-control" id="OBP"  value={{$datos["bateador"]->OBP}} required>
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
