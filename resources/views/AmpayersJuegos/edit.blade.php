@extends('default')
@section('title')
    Editar Ampayer
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('AmpayersJuegoUpdate') }} method="post">
                @csrf
                
                    <div class="row mb-2">
                        <div class="col">
                            <h1 class="text-center">EDITAR AMPAYERS JUEGO</h1><br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idCuerpo" class="form-label">ID:</label>
                            <input type="text" name="idCuerpo" class="form-control" id="idCuerpo" required
                                value={{ $datos['ampayer']->idCuerpo }} @readonly(true)>

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idJuego" class="form-label">ID Juego:</label>
                            <input type="text" name="idJuego" class="form-control" id="idJuego" required
                                value={{ $datos['ampayer']->idJuego }} @readonly(true)>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="idAmpayer" class="form-label">Ampayer:</label>
                            <select type="text" name="idAmpayer" class="form-select" id="idAmpayer" required>
                                @foreach ($datos['ampayers'] as $a)
                                    <option value={{ $a->idAmpayer }}
                                        {{ $datos['ampayer']->idAmpayer == $a->idAmpayer ? 'selected' : '' }}>
                                        {{ $a->nombre . ' ' . $a->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="ubicacion" class="form-label">Ubicacion:</label>
                            <select type="text" name="ubicacion" class="form-select" id="ubicacion" required>
                                <option value="C" {{$datos["ampayer"]->ubicacion == "C" ? "selected" : ""}}>C</option>
                                <option value="P" {{$datos["ampayer"]->ubicacion == "P" ? "selected" : ""}}>P</option>
                                <option value="1B" {{$datos["ampayer"]->ubicacion == "1B" ? "selected" : ""}}>1B</option>
                                <option value="2B" {{$datos["ampayer"]->ubicacion == "2B" ? "selected" : ""}}>2B</option>
                                <option value="3B" {{{$datos["ampayer"]->ubicacion == "3B" ? "selected" : ""}}}>3B</option>
                                <option value="SS" {{$datos["ampayer"]->ubicacion == "SS" ? "selected" : ""}}>SS</option>
                                <option value="LF" {{$datos["ampayer"]->ubicacion == "LF" ? "selected" : ""}}>LF</option>
                                <option value="CF" {{$datos["ampayer"]->ubicacion == "CF" ? "selected" : ""}}>CF</option>
                                <option value="RF" {{$datos["ampayer"]->ubicacion == "RF" ? "selected" : ""}}>RF</option>
                                <option value="DE" {{$datos["ampayer"]->ubicacion == "DE" ? "selected" : ""}}>DE</option>
                                <option value="BC" {{$datos["ampayer"]->ubicacion == "BC" ? "selected" : ""}}>BC</option>
                            </select>
                        </div>
                    </div>


                    <div class="row mb-2">

                        <div class="col justify-content-center"> 
                            <button type="submit" class="btn btn-primary w-100">EDITAR</button>
                        </div>
                    </div>
               

            </form>
        </div>
    </div>
@endsection
