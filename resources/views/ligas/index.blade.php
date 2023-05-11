@extends('table')

@section('title')
    ligas
@endsection

@section('createRoute')
    {{ route('ligasCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Presidente</th>
        <th scope="col">Cordinador</th>
        <th scope="col">Mapa</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefonos</th>
        <th scope="col">Redes</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idLiga }}</td>
            <td>{{ $dato->descripcion }}</td>
            <td>{{ $dato->presidente }}</td>
            <td>{{ $dato->coordinador }}</td>
            <td>{{ $dato->mapa }}</td>
            <td>{{ $dato->direccion}}</td>
            <td>{{ $dato->telefono}}</td>
            <td>{{ $dato->redes}}</td>
            
            <td colspan="2">
                <x-actionButtons route="{{route('ligasEdit', ['id' => $dato->idLiga])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
