@extends('default')
@section('title')
    Listado de Equipos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Listado de Equipos</h1>
            <div class="container">
                <div class="row justify-content-between">

                    @foreach ($equipos as $equipo)
                        <div class="card" style="width: 20%;">
                            <!--18 rem - Validar imagen para que en caso que no exista la imagen del jugador se muestre una imagen por defecto si es varonil o femenil-->

                            @php
                                $ruta_imagen = '/img/equipos/' . $equipo->idEquipo . '.png';
                            @endphp

                            @switch(true)
                                @case(file_exists(public_path($ruta_imagen)))
                                    <img src="{{ asset($ruta_imagen) }}" class="card-img-top img-fluid mt-2"
                                        style="max-width: 100%; height: 60%;">
                                @break

                                @default
                                    <img src="{{ asset('/img/equipos/28.png') }}" class="card-img-top img-fluid mt-2"
                                        style="max-width: 100%; height: 60%;">
                            @endswitch



                            <div class="card-body p-1">
                                ID: {{ $equipo->idEquipo }}<br>
                                <b>Nombre: </b>{{ $equipo->nombre }}<br>
                                <b>Ciudad: </b>{{ $equipo->ciudad }}<br>
                                <b>ID Tecnico: </b>{{ $equipo->idTecnico }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
