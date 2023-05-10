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
                                <div class="d-flex justify-content-evenly">
                                    <a href={{ route('EquiposEdit', ['id' => $datos['equipo']->idEquipo]) }}
                                        class="btn btn-primary  ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </a>
                                </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
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
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary"
                                                        href={{ route('RosterEdit', ['id' => $roster->idEquipo]) }}>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pencil-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                        </svg>
                                                    </a>
                                                    <a type="button" class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                    </a>
                                                </div>
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
