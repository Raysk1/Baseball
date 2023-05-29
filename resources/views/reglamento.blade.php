@extends('default')

@section('title')
    Reglamento
@endsection

@section('styles')
    <style type="text/css">
        .conten1 {
            background: ;
            padding: 100px;
            margin-top: 20px;
            flex-direction: row;
            justify-content: space-between;
            display: flex;
        }

        .caja {
            background: ;
            width: 80%;
            height: 500px;
            border-radius: 30px;
        }

        .conten {
            background: ;
            padding: 100px;
            margin-top: 10px;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            display: flex;
        }

        .caja1 {
            background: ;
            width: 25%;
            height: 300px;
            border-radius: 30px;
        }

        .conten2 {
            background: ;
            padding: 100px;
            margin-top: 10px;
            flex-direction: row;
            justify-content: space-between;
            display: flex;
        }

        .conten3 {
            background: ;
            padding: 75px;
            margin-top: 10px;
            flex-direction: row;
            justify-content: space-between;
            display: flex;
        }

        .caja2 {
            background: ;
            width: 25%;
            height: 300px;
            border-radius: 30px;
        }
    </style>
@endsection

@section('content')
    <h1>
        <center>Reglamento Oficial Baseball </center>
    </h1>
    <hr>
    <div class="conten">
        <div class="caja2">
            <img src="/img/regla1.jpg" width="120%" height="150%">
        </div>
        <div class="caja2">
            <img src="/img/regla2.jpg" width="120%" height="150%">
        </div>

        <div class="caja2">
            <img src="/img/regla3.jpg" width="120%" height="150%">
        </div>
    </div>


    <div class="conten1">
        <div class="caja2">
            <img src="/img/regla4.jpg" width="120%" height="150%">
        </div>
        <div class="caja2">
            <img src="/img/regla5.jpg" width="120%" height="150%">
        </div>

        <div class="caja2">
            <img src="/img/regla6.jpg" width="120%" height="150%">
        </div>
    </div>


    <div class="conten2">

        <div class="caja2">
            <img src="/img/regla7.jpg" width="120%" height="150%">
        </div>

        <div class="caja2">
            <img src="/img/regla8.jpg" width="120%" height="150%">
        </div>
        <div class="caja2">
            <img src="/img/regla9.jpg" width="120%" height="150%">
        </div>
    </div>
@endsection
