@extends('table')

@section('title')
    Ampayers
@endsection

@section('createRoute')
    {{ route('AmpayersCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Fecha Nacimiento</th>
        <th scope="col">CURP</th>
        <th scope="col">Abreviación</th>
        <th scope="col">Status</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idAmpayer }}</td>
            <td>{{ $dato->nombre }}</td>
            <td>{{ $dato->apellidos }}</td>
            <td>{{ $dato->fechaNacimiento }}</td>
            <td>{{ $dato->curp }}</td>
            <td>{{ $dato->abreviacion }}</td>
            
            <td>
                @if ($dato->activo)
                    Activo
                @else
                    Inactivo
                @endif
            </td>
            <td colspan="2">
               <x-actionButtons route="{{route('AmpayersEdit', ['id' => $dato->idAmpayer])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
