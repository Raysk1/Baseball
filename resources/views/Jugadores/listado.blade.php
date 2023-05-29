@extends('default')
@section('title')
    Listado de Jugadores
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="">
            <h1>Listado de Jugadores</h1>
            <div class="container">
                <div class="row justify-content-center">

                    @foreach ($jugadores as $jugador)
                        <div class="card" style="width: 20%; margin: 5px">
                            <!--18 rem - Validar imagen para que en caso que no exista la imagen del jugador se muestre una imagen por defecto si es varonil o femenil-->
                            @php
                                $ruta_imagen = '/img/jugadores/' . $jugador->idAfiliacion . '.png';
                            @endphp

                            @switch(true)
                                @case(file_exists(public_path($ruta_imagen)))
                                    <img src="{{ asset($ruta_imagen) }}" class="card-img-top my-2"
                                        style="width: 100%; height: 10rem;">
                                @break

                                @default
                                    <img src="{{ $jugador->rama == 'Varonil' ? '/img/jugadores/Varonil.jpg' : '/img/jugadores/Femenil.jpg' }}"
                                    class="card-img-top my-2"  style="width:100%; height: 10rem;">
                            @endswitch


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
