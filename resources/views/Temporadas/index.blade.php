@extends('table')

@section('title')
    Temporada
@endsection

@section('createRoute')
    {{ route('TemporadasCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Liga</th>
        <th scope="col">Grupo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Momento</th>
        <th scope="col">temporada</th>
        <th scope="col">nombre</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idTemporada}}</td>
            <td>{{ $dato->idLiga }}</td>
            <td>{{ $dato->grupo }}</td>
            <td>{{ $dato->categoria }}</td>
            <td>{{ $dato->momento }}</td>
            <td>{{ $dato->temporada}}</td>
            <td>{{ $dato->nombre}}</td>
            <td colspan="2">
                <div class="d-flex justify-content-evenly">
                    <x-actionButtons route="{{route('TemporadasEdit', ['id' => $dato->idTemporada])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
