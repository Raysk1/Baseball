@extends('default')
@section('title')
    Detalles del juego
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
    <div class="container text-center" >
        <div class="row mt-1">
            <h3>Datos generales del juego</h3>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Temportada</th>
                            <th scope="col">Jornada</th>
                            <th scope="col">Campo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Clima</th>
                            <th scope="col">Equipo Visitante</th>
                            <th scope="col">Equipo Local</th>
                            <th scope="col">Final</th>
                            <th scope="col" class="text-center" colspan="2">Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">{{ $datos['juego']->idJuego }}</td>
                            <td>{{ $datos['juego']->temporada }}</td>
                            <td>{{ $datos['juego']->jornada }}</td>
                            <td>{{ $datos['juego']->parque }}</td>
                            <td>{{ $datos['juego']->fecha }}</td>
                            <td>{{ $datos['juego']->hora }}</td>
                            <td>{{ $datos['juego']->clima }}</td>
                            <td>{{ $datos['juego']->equipoVisitante }}</td>
                            <td>{{ $datos['juego']->equipoLocal }}</td>
                            <td>{{ $datos['juego']->final }}</td>
                            <td colspan="2" style="width: 12%">
                                <div class="d-flex justify-content-evenly">
                                    <a href={{ route('juegosEdit', ['id' => $datos['juego']->idJuego]) }}
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
                <h3>Ampayers en el juego</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href="" class="btn btn-primary mb-3 w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center" style="height: 200px;">
                            <table class="table">
                                <thead class="bg-white border-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Ampayer</th>
                                    <th scope="col">Ubicacion</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>
                                    @foreach ($datos['ampayers'] as $ampayer)
                                        <tr>
                                            <td>{{ $ampayer->idAmpayer }}</td>
                                            <td>{{ $ampayer->nombre . ' ' . $ampayer->apellidos }}</td>
                                            <td>{{ $ampayer->ubicacion }}</td>
                                            <td colspan="2" style="width: 12%">
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary  ">
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
        <div class="row mt-1">
            <div class="col">
                <h3>Entradas</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href="" class="btn btn-primary mb-3 w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center" style="height: 200px;">
                            <table class="table">
                                <thead class="bg-white border-white ">
                                    <th scope="col">Entrada Alta</th>
                                    <th scope="col">Entrada Baja</th>
                                    <th scope="col">Carreras Alta</th>
                                    <th scope="col">Carreras baja</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>
                                    @foreach ($datos['entradas'] as $entrada)
                                        <tr>

                                            <td>{{ $entrada->entradaAlta }}</td>
                                            <td>{{ $entrada->entradaBaja }}</td>
                                            <td>{{ $entrada->carrerasAlta }}</td>
                                            <td>{{ $entrada->carrerasAlta }}</td>
                                            <td colspan="2" style="width: 12%">
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary  ">
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
        <div class="row mt-1">
            <div class="col">
                <h3>Turnos</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href="" class="btn btn-primary mb-3 w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center" style="height: 200px;">
                            <table class="table">
                                <thead class="bg-white border-white ">
                                    <th scope="col">Equipo</th>
                                    <th scope="col">Jugador</th>
                                    <th scope="col">No. turno</th>
                                    <th scope="col">Inning</th>
                                    <th scope="col">Carrera</th>
                                    <th scope="col">Resultado</th>
                                    <th scope="col">Lanzador</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>
                                    @foreach ($datos['turnos'] as $turno)
                                        <tr>
                                            <td>{{ $turno->equipo }}</td>
                                            <td>{{ $turno->jugador }}</td>
                                            <td>{{ $turno->turno }}</td>
                                            <td>{{ $turno->inning }}</td>
                                            <td>{{ $turno->carrera }}</td>
                                            <td>{{ $turno->resultado }}</td>
                                            <td>{{ $turno->lanzador }}</td>
                                            <td colspan="2" style="width: 12%">
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary  ">
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
        <div class="row mt-1">
            <div class="col">
                <h3>Bateadores</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href="" class="btn btn-primary mb-3 w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center" style="height: 200px;">
                            <table class="table">
                                <thead class="bg-white border-white ">
                                    <th scope="col">Jugador</th>
                                    <th scope="col">AB</th>
                                    <th scope="col">C</th>
                                    <th scope="col">H</th>
                                    <th scope="col">CP</th>
                                    <th scope="col">BB</th>
                                    <th scope="col">K</th>
                                    <th scope="col">PJE</th>
                                    <th scope="col">OBP</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>
                                    @foreach ($datos['bateadores'] as $bateador)
                                        <tr>
                                            <td>{{ $bateador->jugador }}</td>
                                            <td>{{ $bateador->ab }}</td>
                                            <td>{{ $bateador->c }}</td>
                                            <td>{{ $bateador->h }}</td>
                                            <td>{{ $bateador->cp }}</td>
                                            <td>{{ $bateador->bb }}</td>
                                            <td>{{ $bateador->k }}</td>
                                            <td>{{ $bateador->pje }}</td>
                                            <td>{{ $bateador->obp }}</td>
                                            <td colspan="2" style="width: 12%">
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary  ">
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
        <div class="row mt-1">
            <div class="col">
                <h3>Lanzadores</h3>
                <div class="justify-content-center">
                    <div class=" mt-1">
                        <a href="" class="btn btn-primary mb-3 w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Agregar
                        </a>
                        <div class="table-responsive text-center" style="height: 200px;">
                            <table class="table">
                                <thead class="bg-white border-white ">
                                    <th scope="col">Jugador</th>
                                    <th scope="col">IP</th>
                                    <th scope="col">BA</th>
                                    <th scope="col">C</th>
                                    <th scope="col">H</th>
                                    <th scope="col">BB</th>
                                    <th scope="col">K</th>
                                    <th scope="col">PCA</th>
                                    <th scope="col">POP</th>
                                    <th scope="col" class="text-center" colspan="2">Accion</th>

                                </thead>
                                <tbody>

                                    @foreach ($datos['lanzadores'] as $lanzador)
                                        <tr>

                                            <td>{{ $lanzador->jugador }}</td>
                                            <td>{{ $lanzador->ip }}</td>
                                            <td>{{ $lanzador->ba }}</td>
                                            <td>{{ $lanzador->c }}</td>
                                            <td>{{ $lanzador->h }}</td>
                                            <td>{{ $lanzador->bb }}</td>
                                            <td>{{ $lanzador->k }}</td>
                                            <td>{{ $lanzador->pca }}</td>
                                            <td>{{ $lanzador->pop }}</td>
                                            <td colspan="2" style="width: 12%">
                                                <div class="d-flex justify-content-evenly">
                                                    <a class="btn btn-primary  ">
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
