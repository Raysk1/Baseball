@extends('default')
@section('title')
    Listado de Juegos
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <h1>Listado de Juegos</h1>
            <div class="container">
                <div class="row justify-content-between">

                    @foreach ($juegos as $j)
                        <div class="card" style="width: 33%;">
                            <div class="table-responsive">

                                <table class="table table-responsive table-hover mt-3">
                                    @php
                                        $rutaImagenL = '/img/equipos/' . $j->idEquipoLocal . '.png';
                                        $rutaImagenV = '/img/equipos/' . $j->idEquipoVisitante . '.png';
                                    @endphp
                                    <tr>
                                        <th colspan="5">FINAL</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>C</th>
                                        <th>H</th>
                                        <th>E</th>
                                    </tr>

                                    <tr>
                                        <td><img src="{{ asset($rutaImagenL)}}" class="img-fluid rounded"
                                                style="width: 25px; height: 25px;"></td>
                                        <td>Local: {{ $j -> equipoLocal -> nombre}}</td>
                                        <td>{{ $j->carrerasLocal }}</td>
                                        <td>{{ $j->hitsLocal }}</td>
                                        <td>{{ $j->erroresLocal }}</td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{ asset($rutaImagenV)}}" class="img-fluid rounded"
                                            style="width: 25px; height: 25px;"></td>
                                            <td>Visitante: {{ $j -> equipoVisitante -> nombre}}</td>
                                        <td>{{ $j->carrerasVisitante }}</td>
                                        <td>{{ $j->hitsVisitante }}</td>
                                        <td>{{ $j->erroresVisitante }}</td>
                                    </tr>
                                </table>
                                <a href="{{ route("boxscore", ["id"=>$j->idJuego])}} "  class="btn btn-primary w-100 mb-3">Boxscore</a>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endsection
