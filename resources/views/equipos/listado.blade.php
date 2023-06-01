@extends('default')
@section('title')
    Listado de Equipos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div >
            <h1 class="text-white">Listado de Equipos</h1>
            <div class="container">
                <div class="row justify-content-center">

                    @foreach ($equipos as $equipo)
                    <div class="card" style="width: 20%; margin: 5px">
                            
                            @php
                                $ruta_imagen = '/img/equipos/'. $equipo->idEquipo. '.png';
                            @endphp

                            @switch(true)
                                @case(file_exists(public_path($ruta_imagen)))
                                    <img src="{{ asset($ruta_imagen) }}" class="card-img-top img-fluid mt-2"
                                        style="max-width: 100%; height: 60%;">
                                @break

                                @default
                                    <img src="{{ asset('/img/equipos/0.png') }}" class="card-img-top img-fluid mt-2"
                                        style="max-width: 100%; height: 60%;">
                            @endswitch

                            <div class="card-body p-1">
                                <b>Nombre: </b>{{ $equipo->nombre }}<br>
                                <b>Ciudad: </b>{{ $equipo->ciudad }}<br>
                                <b>{{$equipo->manejador->tipo}}: </b>{{ $equipo->manejador->nombre }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
