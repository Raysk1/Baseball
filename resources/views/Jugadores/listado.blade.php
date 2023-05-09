@extends('default')
@section('title')
    Listado de Jugadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Prueba</h1>

            <table border = "1px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($jugadores as $jugador)
                    <tr>
                        <td>{{$jugador -> idAfiliacion}}</td>
                        <td>{{$jugador -> nombre}}</td>
                        <td>{{$jugador -> apellidos}}</td>
                    </tr>
        
                    @endforeach
                </tbody>
            </table>


            <div class = "container">
                <div class="row justify-content-between">
                <div class="card" style="width: 18rem;">
                <img src="/img/personaas.jpg" class="card-img-top" alt="...">
                <div class="card-body"><br>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <br>
              </div>

              <div class = "container">
                <div class="row justify-content-between">
                <div class="card" style="width: 18rem;">
                <img src="/img/personaas.jpg" class="card-img-top" alt="...">
                <div class="card-body"><br>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <br>
              </div>

        </div>
    </div>
@endsection
