@extends('default')
@section('title')
    Detalles del equipo
@endsection

@section('script')
    <script src="https://unpkg.com/floatthead"></script>
    <script type="text/javascript">
        var $tables = $('table.table');
        for (let i = 0; i < $tables.length; i++) {
            $tables.floatThead({
                scrollContainer: function($table) {
                    return $table.closest('.table-responsive');
                }
            });

        }
    </script>
@endsection

@section('content')
    <div class="container text-center">
        <div class="row mt-1">
            <h3>Datos generales del equipo</h3>
            <div class="table-responsive">
                <table class="table text-center table-dark  ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Tecnico</th>
                            <th scope="col" class="text-center" colspan="2">Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td>{{ $datos['equipo']->idEquipo}}</td>
                            <td>{{ $datos['equipo']->nombre }}</td>
                            <td>{{ $datos['equipo']->ciudad}}</td>
                            <td>{{ $datos['equipo']->manejador->nombre }}</td>
                            <td colspan="2" style="width: 12%">
                                <x-actionButtons route="{{route('EquiposEdit', ['id' => $datos['equipo']->idEquipo])}}"></x-actionButtons>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row mt-1">
            <div class="col">
                <h3>Jugadores en el equipo</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href={{ route('RosterCreate',["idEquipo" => $datos["equipo"]->idEquipo]) }} class="btn btn-primary mb-3 w-100">
                          <svg width="32" height="32" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center table-dark" style="height: 200px;">
                            <table class="table table-dark">
                                <thead class="bg-white border-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Posicion</th>
                                    <th scope="col">Tira</th>
                                    <th scope="col">Golpea</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>
                                    @foreach ($datos['equipo']->rosters as $roster)
                                        <tr>
                                            <td>{{ $roster->jugador->idAfiliacion }}</td>
                                            <td>{{ $roster->jugador->nombre . ' ' . $roster->jugador->apellidos }}</td>
                                            <td>{{ $roster->jugador->posicion }}</td>
                                            <td>{{ $roster->jugador->tira }}</td>
                                            <td>{{ $roster->jugador->golpea }}</td>
                                            <td colspan="2"  style="width: 12%">
                                                <x-actionButtons route="{{route('RosterEdit', ['id' => $roster->idRoster])}}"></x-actionButtons>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
