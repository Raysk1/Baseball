@extends('default')

@section('title')
    Boxscore
@endsection

@section('content')
    <div class="mx-2  mt-3 bg-white">
        <div class="text-center">
            <h1 class="fw-bold">Boxscore</h1>
            <h4>Liga de softball</h4>
            <h4>Grupo </h4>
        </div>
        <div class="d-flex ">
            <div class="w-25 me-2">
                <div class="text-center text-white mb-2" style="background-color: #6d0001 ">
                    <span>---</span>
                </div>
                <div class="d-flex">
                    <img src="/img/img.jpg" class="img-fluid rounded-top w-75" lt="">
                    <div
                        class="text-center flex-fill d-flex align-items-center justify-content-center border border-2 border-dark ms-1">
                        <span class="fs-1 fw-bold   ">8</span>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <h4 class="fw-bold">Los angeles</h4>
                    <span>Record [1,1] cuarto</span>
                </div>
            </div>
            <div class="w-50">
                <div class="border-primary text-center fw-bold border border-3 ">
                    <span>wdad</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                @for ($i = 1; $i <= 9; $i++)
                                    <th scope="col">{{ $i }}</th>
                                @endfor
                                <th scope="col">C</th>
                                <th scope="col">H</th>
                                <th scope="col">E</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Los Angles</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="">
                                <td scope="row">Arizona</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex">

                    <div class="flex-grow-1 fw-bold d-flex flex-column">
                        <span class="border border-1 border-dark m-0">ganador</span>
                        <span>Jose</span>
                        <span>Record</span>
                    </div>
                    <div class="flex-grow-1 fw-bold d-flex flex-column text-end">
                        <span class="border border-1 border-dark m-0">ganador</span>
                        <span>Jose</span>
                        <span>Record</span>
                    </div>
                </div>
            </div>
            <div class="w-25 ms-2 ">
                <div class="text-center text-white mb-2" style="background-color: #304f9e ">
                    <span>---</span>
                </div>
                <div class="d-flex">
                    <div
                        class="text-center flex-fill d-flex align-items-center justify-content-center border border-2 border-dark me-1">
                        <span class="fs-1 fw-bold   ">8</span>
                    </div>
                    <img src="/img/img.jpg" class="img-fluid rounded-top w-75" lt="">
                </div>
                <div class="mt-3 text-center">
                    <h4 class="fw-bold">Arizona</h4>
                    <span>Record [1,1] cuarto</span>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="w-50">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class=" text-white" style="background-color: #6d0001 ">
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
                            <tr class="">
                                <td scope="row">R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="w-50">
                <div class="table-responsive">
                    <table class="table table-sm">
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
                            <tr class="">
                                <td scope="row">R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
