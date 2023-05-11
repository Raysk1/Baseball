@extends('table')

@section('title')
    Jugadores
@endsection


@section('createRoute')
    {{ route('jugadoresCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Posicion</th>
        <th scope="col">Rama</th>
        <th scope="col">Status</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" " >
            <td scope="row">{{ $dato->idAfiliacion }}</td>
            <td>{{ $dato->nombre }}</td>
            <td>{{ $dato->apellidos }}</td>
            <td>{{ $dato->posicion }}</td>
            <td>{{ $dato->rama }}</td>
            <td>
                @if ($dato->status == 1)
                    Activo
                @else
                    Inactivo
                @endif
            </td>
            <td colspan="2">
                <x-actionButtons route="{{route('jugadoresEdit', ['id' => $dato->idAfiliacion])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
