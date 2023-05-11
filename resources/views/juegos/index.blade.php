@extends('table')

@section('title')
    Juegos
@endsection


@section('createRoute')
    {{ route('juegosCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Temporada</th>
        <th scope="col">Jornada</th>
        <th scope="col">Campo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Clima</th>
        <th scope="col">Equipo Visitante</th>
        <th scope="col">Equipo Local</th>
        <th scope="col">Final</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" " >
            <td  scope="row">{{ $dato->idJuego }}</td>
            <td>{{ $dato->temporada}}</td>
            <td>{{ $dato->jornada}}</td>
            <td>{{ $dato->parque }}</td>
            <td>{{ $dato->fecha}}</td>
            <td>{{ $dato->hora}}</td>
            <td>{{ $dato->clima}}</td>
            <td>{{ $dato->equipoVisitante}}</td>
            <td>{{ $dato->equipoLocal}}</td>
            <td>{{ $dato->final}}</td>
            <td colspan="2">
                <x-actionButtons route="{{route('juegosDetails', ['id' => $dato->idJuego])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
