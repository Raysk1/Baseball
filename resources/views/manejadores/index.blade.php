@extends('table')

@section('title')
    Equipos
@endsection

@section('createRoute')
    {{ route('manejadoresCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')

    
     
    
    @foreach ($datos as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idTecnico }}</td>
            <td>{{ $dato->nombre }}</td>
            <td>{{ $dato->tipo }}</td>
            
            <td colspan="2">
                <x-actionButtons route="{{route('manejadoresEdit', ['id' => $dato->idTecnico])}}"></x-actionButtons>
            </td>
        </tr>
     
    
    @endforeach
@endsection
