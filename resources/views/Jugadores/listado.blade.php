@extends('default')
@section('title')
    Listado de Jugadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <div class="container">
                <div class="row justify-content-between">

                    @foreach ($jugadores as $jugador)
                        <div class="card" style="width: 18rem;">
                            <img src="/img/jugadores/{{ $jugador->idAfiliacion }}.png" class="card-img-top img-fluid mt-2" alt="/img/jugadores/chicamala.jpg" style="max-width: 100%; height: 60%;">
                            <div class="card-body p-1">
                                ID: {{ $jugador->idAfiliacion }}<br>
                                <b>{{ $jugador->nombre }} {{ $jugador->apellidos }}<br></b>
                                Rama: {{ $jugador->rama }}<br>
                                Posicion: {{ $jugador->posicion }}<br>
                                <b>Golpea: </b>{{ $jugador->golpea }} 
                                <b>Tira: </b>{{ $jugador->tira }}<br>
                                Ab: {{ $jugador->abreviacion }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    @endsection
