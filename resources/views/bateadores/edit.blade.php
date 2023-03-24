@extends('default')
@section('title')
    Editar bateadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('bateadoresUpdate') }} method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="idJuego" class="form-label">id juego:</label>
                        <input type="text" class="form-control" name="idJuego" id="idJuego" required
                            value={{ $datos-> idJuego }} >
                    </div>
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">ID Afiliacion:</label>
                        <input type="text" class="form-control" name="idAfiliacion" id="idAfiliacion"
                         value={{ $datos-> idAfiliacion }}>
                    </div>
                    <div class="col">
                        <label for="AB" class="form-label">AB:</label>
                        <input type="text" class="form-control" name="AB" id="AB"
                         value={{ $datos-> AB }}>
                    </div>
                </div>
                <div class="row mb-3">
                    
                    <div class="col">
                        <label for="C" class="form-label">C:</label>
                        <input type="text" name="C" class="form-control" id="C"
                            value={{ $datos-> C }} >
                    </div>
                    <div class="col">
                        <label for="H" class="form-label">H:</label>
                        <input type="text" name="H" class="form-control" id="H"
                            value={{ $datos-> H }} >
                    </div>
                    <div class="col">
                        <label for="CP" class="form-label">CP</label>
                        <input type="text" name="CP" class="form-control" id="CP"
                            value={{ $datos-> CP }} >
                    </div>
               
                   
                    <div class="col">
                        <label for="BB" class="form-label">BB:</label>
                        <input type="text" name="BB" class="form-control" id="BB" 
                        value={{ $datos-> BB }}>
                    </div>
                    <div class="col">
                         <label for="K" class="form-label">K:</label>
                         <input type="NUMERIC" name="K" class="form-control" id="K" 
                                value={{ $datos-> K }}>
                     </div>
                     <div class="col">
                        <label for="PJE" class="form-label">PJE:</label>
                        <input type="text" name="PJE" class="form-control" id="PJE" 
                               value={{ $datos-> PJE }}>
                    </div>
                    <div class="col">
                        <label for="OBP" class="form-label">OBP:</label>
                        <input type="text" name="OBP" class="form-control" id="OBP" 
                               value={{ $datos-> OBP }}>
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
