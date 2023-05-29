@extends('default')
@section('title')
    Listado de Ampayers
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Listado de Ampayers</h1>
            <div class="container">
                <div class="row justify-content-center">

                    @foreach ($ampayer as $ampayer)
                        <div class="card" style="width: 20%; margin: 5px">
                            <!--18 rem - Validar imagen para que en caso que no exista la imagen del jugador se muestre una imagen por defecto si es varonil o femenil-->
                            @php
                                $ruta_imagen = '/img/ampayers/' . $ampayer->idAmpayer . '.png';
                            @endphp

                            @switch(true)
                                @case(file_exists(public_path($ruta_imagen)))
                                    <img src="{{ asset($ruta_imagen) }}" class="card-img-top img-fluid mt-2"
                                        style="max-width: 100%; height: 60%;">
                                @break

                                @default
                                    <img src="{{ $ampayer->rama == 'Varonil' ? '/img/jugadores/Varonil.jpg' : '/img/jugadores/Femenil.jpg' }}"
                                        class="card-img-top img-fluid mt-2" style="max-width: 100%; height: 60%;">
                            @endswitch


                            <div class="card-body p-1">
                                ID: {{ $ampayer->idAmpayer }}<br>
                                <b>{{ $ampayer->nombre }} {{ $ampayer->apellidos }}<br></b>
                                <b>Ab: </b>{{ $ampayer->abreviacion }}
                                <b>Status: </b>{{ $ampayer->status }}<br>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
