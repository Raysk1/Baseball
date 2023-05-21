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
                                        <td><img src="/img/juegos/1.png"></td>
                                        <td>Local</td>
                                        <td>{{ $j->carrerasLocal }}</td>
                                        <td>{{ $j->hitsLocal }}</td>
                                        <td>{{ $j->erroresLocal }}</td>
                                    </tr>

                                    <tr>
                                        <td><img src="/img/juegos/1.png"></td>
                                        <td>Visitante</td>
                                        <td>{{ $j->carrerasVisitante }}</td>
                                        <td>{{ $j->hitsVisitante }}</td>
                                        <td>{{ $j->erroresVisitante }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan ="5"><button>Boxscore</button></td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endsection
