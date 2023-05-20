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

                    <div class="card" style="width: 33%;">

                        <table class="table table-responsive table-hover">
                            <tr>
                                <th colspan="5">FINAL</th>
                            </tr>
                            <tr>
                                <th colspan="2"></th>
                                <th>C</th>
                                <th>H</th>
                                <th>E</th>
                            </tr>

                            <tr>
                                <td><img src="/img/juegos/1.png"></td>
                                <td>Local</td>
                                @foreach ($juegos as $j)
                                    <td>{{ $j->carrerasLocal }}</td>
                                    <td>{{ $j->hitsLocal }}</td>
                                    <td>{{ $j->erroresLocal }}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td><img src="/img/juegos/1.png"></td>
                                <td>Visitante</td>
                                @foreach ($juegos as $j)
                                    <td>{{ $j->carrerasVisitante }}</td>
                                    <td>{{ $j->hitsVisitante }}</td>
                                    <td>{{ $j->erroresVisitante }}</td>
                                @endforeach
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
