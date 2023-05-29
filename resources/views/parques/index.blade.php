@extends('table')

@section('title')
    Parques
@endsection

@section('createRoute')
    {{ route('parquesCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">ID</th>
        <th scope="col">Descripcion</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($parques as $dato)
        <tr class=" ">
            <td scope="row">{{ $dato->idCampo }}</td>
            <td>{{ $dato->descripcion }}</td>
            
            <td colspan="2">
                <x-actionButtons route="{{route('parquesEdit', [$dato->idCampo])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection