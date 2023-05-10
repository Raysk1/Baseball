@extends('default')
@section('title')
    Listado de Jugadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Prueba</h1>

            <table  border="1px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($jugadores as $jugador)
                        <tr>
                            <td>{{ $jugador->idAfiliacion }}</td>
                            <td>{{ $jugador->nombre }}</td>
                            <td>{{ $jugador->apellidos }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



            <div class="container">
                <div class="row justify-content-between">


                    @foreach ($jugadores as $jugador)
                    <div class="card" style="width: 18rem;">
                        <img src='img/jugadores/".$filename."png'  width='300' height='100'>"; 
                        <div class="card-body"><br>
                            <img src="" alt="">
                            ID: {{$jugador->idAfiliacion}}
                            {{$jugador->nombre}} {{$jugador->apellidos}}


                        </div>
                    </div>

                    @endforeach
                    


                </div>
            </div>
            @endsection
