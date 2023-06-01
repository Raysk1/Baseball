@extends('default')

@section('title')
    Boxscore
@endsection

@section('content')
    <div class="mx-2  mt-3 bg-white">
        <div class="text-center">
            <h1 class="fw-bold">Boxscore</h1>
            <h4>Liga de Beisbol Sabatina</h4>
        </div>
        <div class="d-flex ">
            <div class="w-25 me-2">
                <div class="text-center text-white mb-2" style="background-color: #6d0001 ">
                    <span>Visitante</span>
                </div>
                <div class="d-flex">
                    <img src="/img/equipos/{{ $juego->equipoVisitante->idEquipo }}.png" class="img-fluid rounded-top w-75"
                        lt="">
                    <div
                        class="text-center flex-fill d-flex align-items-center justify-content-center border border-2 border-dark ms-1">
                        <span class="fs-1 fw-bold">{{ $carrerasVisitante }}</span>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <h4 class="fw-bold">{{ $juego->equipoVisitante->nombre }}</h4>

                </div>
            </div>
            <div class="w-50">
                <div class="border-primary text-center fw-bold border border-3 ">
                    <span>VS</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col"></th>
                                @for ($i = 1; $i <= $entradas; $i++)
                                    <th scope="col">{{ $i }}</th>
                                @endfor
                                <th scope="col">C</th>
                                <th scope="col">H</th>
                                <th scope="col">E</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="text-center text-white mb-2" style="background-color: #6d0001">Visitante:</td>
                                <td class="fw-bold" scope="row">{{ $juego->equipoVisitante->nombre }}</td>
                                @for ($i = 1; $i <= $entradas; $i++)
                                    <td>{{ $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->where('carrera', 1)->where('inning', $i)->count() }}
                                    </td>
                                @endfor
                                <td class="fw-bold bg-success">{{ $carrerasVisitante }}</td>
                                <td class="fw-bold bg-success">{{ $hitsVisitante }}</td>
                                <td class="fw-bold bg-success">{{ $erroresLocal }}</td>
                            </tr>

                            <tr class="">
                                <td class="text-center text-white mb-2" style="background-color: #304f9e">Local:</td>
                                <td class="fw-bold" scope="row">{{ $juego->equipoLocal->nombre }}</td>
                                @for ($i = 1; $i <= $entradas; $i++)
                                    <td>{{ $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->where('carrera', 1)->where('inning', $i)->count() }}
                                    </td>
                                @endfor
                                <td class="fw-bold  bg-success">{{ $carrerasLocal }}</td>
                                <td class="fw-bold  bg-success">{{ $hitsLocal }}</td>
                                <td class="fw-bold  bg-success">{{ $erroresVisitante }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="d-flex">

                    <div class="flex-grow-1 fw-bold d-flex flex-column">
                        <span
                            class="border border-1 border-dark m-0 p-1">{{ $carrerasVisitante > $carrerasLocal ? 'Ganador' : 'Perdedor' }}</span>
                        <span>{{ $lanzadorVisitante->jugador->nombre }}
                            {{ $lanzadorVisitante->jugador->apellidos }}</span>
                        <span>Record</span>
                    </div>

                    <div class="flex-grow-1 fw-bold d-flex flex-column text-end">
                        <span
                            class="border border-1 border-dark m-0 p-1">{{ $carrerasVisitante < $carrerasLocal ? 'Ganador' : 'Perdedor' }}</span>
                        <span> <span>{{ $lanzadorLocal->jugador->nombre }}
                                {{ $lanzadorLocal->jugador->apellidos }}</span></span>
                        <span>Record</span>
                    </div>
                </div>
            </div>
            <div class="w-25 ms-2 ">
                <div class="text-center text-white mb-2" style="background-color: #304f9e">
                    <span>Local</span>
                </div>
                <div class="d-flex">
                    <div
                        class="text-center flex-fill d-flex align-items-center justify-content-center border border-2 border-dark me-1">
                        <span class="fs-1 fw-bold">{{ $carrerasLocal }}</span>
                    </div>
                    <img src="/img/equipos/{{ $juego->equipoLocal->idEquipo }}.png" class="img-fluid rounded-top w-75"
                        lt="">
                </div>
                <div class="mt-3 text-center">
                    <h4 class="fw-bold">{{ $juego->equipoLocal->nombre }}</h4>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="w-50">
                <div class="table-responsive">
                    <table class="table table-sm text-center">
                        <thead class="text-white" style="background-color: #6d0001 ">
                            <tr>
                                <th>Bateador</th>
                                <th>POS</th>
                                <th>AB</th>
                                <th>C</th>
                                <th>H</th>
                                <th>CP</th>
                                <th>BB </th>
                                <th>K</th>
                                <th>PJE</th>
                                <th>OBP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($juego->turnos->unique('idBateadores')->where('idEquipo', $juego->idEquipoVisitante) as $t)
                                <tr>
                                    <td>
                                        {{ $t->bateador->jugador->nombre }} {{ $t->bateador->jugador->apellidos }}
                                    </td>
                                    <td>
                                        @switch($t->posicion)
                                            @case(1)
                                                P
                                            @break

                                            @case(2)
                                                C
                                            @break

                                            @case(3)
                                                1B
                                            @break

                                            @case(4)
                                                2B
                                            @break

                                            @case(5)
                                                3B
                                            @break

                                            @case(6)
                                                SS
                                            @break

                                            @case(7)
                                                JI
                                            @break

                                            @case(8)
                                                JC
                                            @break

                                            @case(9)
                                                JD
                                            @break
                                            @case(10)
                                            BD
                                        @break

                                            @default
                                        @endswitch
                                    </td>
                                    <td>{{ $t->bateador->AB }}</td>
                                    <td>{{ $t->bateador->C }}</td>
                                    <td>{{ $t->bateador->H }}</td>
                                    <td>{{ $t->bateador->CP }}</td>
                                    <td>{{ $t->bateador->BB }}</td>
                                    <td>{{ $t->bateador->K }}</td>
                                    <td>{{ $t->bateador->PJE }}</td>
                                    <td>{{ $t->bateador->OBP }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="w-50">
                <div class="table-responsive">
                    <table class="table table-sm text-center">
                        <thead class=" text-white" style="background-color: #304f9e ">
                            <tr>
                                <th>Bateador</th>
                                <th>POS</th>
                                <th>AB</th>
                                <th>C</th>
                                <th>H</th>
                                <th>CP</th>
                                <th>BB </th>
                                <th>K</th>
                                <th>PJE</th>
                                <th>OBP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($juego->turnos->unique('idBateadores')->where('idEquipo', $juego->idEquipoLocal) as $t)
                                <tr>
                                    <td>
                                        {{ $t->bateador->jugador->nombre }} {{ $t->bateador->jugador->apellidos }}
                                    </td>
                                    <td>
                                        @switch($t->bateador->jugador->posicion)
                                            @case(1)
                                                P
                                            @break

                                            @case(2)
                                                C
                                            @break

                                            @case(3)
                                                1B
                                            @break

                                            @case(4)
                                                2B
                                            @break

                                            @case(5)
                                                3B
                                            @break

                                            @case(6)
                                                SS
                                            @break

                                            @case(7)
                                                JI
                                            @break

                                            @case(8)
                                                JC
                                            @break

                                            @case(9)
                                                JD
                                            @break

                                            @default
                                        @endswitch
                                    </td>
                                    <td>{{ $t->bateador->AB }}</td>
                                    <td>{{ $t->bateador->C }}</td>
                                    <td>{{ $t->bateador->H }}</td>
                                    <td>{{ $t->bateador->CP }}</td>
                                    <td>{{ $t->bateador->BB }}</td>
                                    <td>{{ $t->bateador->K }}</td>
                                    <td>{{ $t->bateador->PJE }}</td>
                                    <td>{{ $t->bateador->OBP }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
