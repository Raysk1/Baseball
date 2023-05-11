@extends('table')

@section('title')
    Equipos
@endsection

@section('createRoute')
    {{ route('EquiposCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Tecnico</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idEquipo }}</td>
            <td>{{ $dato->nombre }}</td>
            <td>{{ $dato->ciudad }}</td>
            <td>{{ $dato->idTecnico }}</td>
            
            <td colspan="2">
                <x-actionButtons route="{{route('EquiposDetails', ['id' => $dato->idEquipo])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
