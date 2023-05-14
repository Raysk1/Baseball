@extends('default')
@section('title')
    Ligas
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('ligasStore') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idLiga" class="form-label">ID de la liga:</label>
                        <input type="text" class="form-control" name="idLiga" id="idLiga" required
                            value={{ $lastId }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                    </div>
                    <div class="col">
                        <label for="presidente" class="form-label">Presidente:</label>
                        <input type="text" name="presidente" class="form-control" id="presidente" required>
                    </div>
                    <div class="col">
                        <label for="coordinador" class="form-label">Cordinador:</label>
                        <input type="text" name="coordinador" class="form-control" id="coordinador">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <input type="text" name="mapa" class="form-control" id="mapa" required>
                    </div>
                    <div class="col">
                        <label for="direccion" class="form-label">Direccion:</label>
                        <input type="text" name="direccion" class="form-control" id="direccion" required>
                    </div>
                    <div class="col">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="NUMERIC" name="telefono" class="form-control" id="telefono" required>
                    </div>
                    <div class="col">
                        <label for="redes" class="form-label">Redes</label>
                        <input type="text" name="redes" class="form-control" id="redes" required>
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
