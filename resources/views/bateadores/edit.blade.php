@extends('default')
@section('title')
    Editar bateadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('bateadoresUpdate') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idBateadores" class="form-label">ID:</label>
                        <input type="text" name="idBateadores" class="form-control" id="idBateadores" required
                          value={{$datos["bateador"] ->idBateadores}}  readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idJuego" class="form-label">ID juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos['bateador']->juego->idJuego }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
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
                <div class="row mb-2">

                    <div class="col">
                        <label for="AB" class="form-label">AB:</label>
                        <input type="number" min="0" name="AB" class="form-control" id="AB" value={{$datos["bateador"]->AB}} required>
                    </div>
                    <div class="col">
                        <label for="C" class="form-label">C:</label>
                        <input type="number" min="0" name="C" class="form-control" id="C"  value={{$datos["bateador"]->C}} required>
                    </div>
                    <div class="col">
                        <label for="H" class="form-label">H:</label>
                        <input type="number" min="0" name="H" class="form-control" id="H"  value={{$datos["bateador"]->H}} required>
                    </div>
                    <div class="col">
                        <label for="CP" class="form-label">CP:</label>
                        <input type="number" min="0" name="CP" class="form-control" id="CP"  value={{$datos["bateador"]->CP}} required>
                    </div>
                    <div class="col">
                        <label for="BB" class="form-label">BB</label>
                        <input type="number" min="0" name="BB" class="form-control" id="BB"  value={{$datos["bateador"]->BB}} required>
                    </div>
                    <div class="col">
                        <label for="K" class="form-label">K</label>
                        <input type="number" min="0" name="K" class="form-control" id="K"  value={{$datos["bateador"]->K}} required>
                    </div>
                   
                </div>

                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
