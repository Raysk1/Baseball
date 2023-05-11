@extends('table')

@section('title')
    Juegos
@endsection

@section('createRoute')
    {{ route('EntradaCreate') }}
@endsection

@section('thead')
    <tr class=" ">
        <th scope="col">id del juego</th>
        <th scope="col">Entrada Alta</th>
        <th scope="col">Entrada Baja</th>
        <th scope="col">Alta de Carreras</th>
        <th scope="col">Baja de Carreras</th>
        <th scope="col" class="text-center" colspan="2">Accion</th>

    </tr>
@endsection

@section('tbody')
    @foreach ($datos as $dato)
        <tr class=" " >
            <td  scope="row">{{ $dato->idJuego }}</td>
            <td>{{ $dato->entradaAlta}}</td>
            <td>{{ $dato->entradaBaja}}</td>
            <td>{{ $dato->carrerasAlta}}</td>
            <td>{{ $dato->carrerasBaja}}</td>
          
            <td>
                @if ($dato->status == 1)
                    Activo
                @else
                    Inactivo
                @endif
            </td>
            <td colspan="2">
               <x-actionButtons route="{{route('jugadoresEdit', ['id' => $dato->idJuego])}}"></x-actionButtons>
            </td>
        </tr>
    @endforeach
@endsection
