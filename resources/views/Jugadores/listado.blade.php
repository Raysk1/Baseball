@extends('default')
@section('title')
    Listado de Jugadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Listado de Jugadores</h1>
            <div class="container">
                <div class="row justify-content-between">

                    @foreach ($jugadores as $jugador)
                        <div class="card" style="width: 20%;">
                            <!--18 rem - Validar imagen para que en caso que no exista la imagen del jugador se muestre una imagen por defecto si es varonil o femenil-->
                            @if (file_exists('/img/jugadores/' . $jugador->idAfiliacion . '.png'))
                                <img src="/img/jugadores/{{ $jugador->idAfiliacion }}.png" class="card-img-top img-fluid mt-2"
                                    style="max-width: 100%; height: 60%;">
                            @else
                                <img src="{{ $jugador->rama == 'Varonil' ? '/img/jugadores/Varonil.jpg' : '/img/jugadores/Femenil.jpg' }}"
                                    class="card-img-top img-fluid mt-2" style="max-width: 100%; height: 60%;">
                            @endif

                            <div class="card-body p-1">
                                ID: {{ $jugador->idAfiliacion }}<br>
                                <b>{{ $jugador->nombre }} {{ $jugador->apellidos }}<br></b>
                                <b>Ab: </b>{{ $jugador->abreviacion }}
                                <b>Rama: </b>{{ $jugador->rama }}<br>
                                <b>Posicion: </b>{{ $jugador->posicion }}<br>
                                <b>Golpea: </b>{{ $jugador->golpea }}
                                <b>Tira: </b> {{ $jugador->tira }}<br>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
