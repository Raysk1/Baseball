@extends('default')

@section('title')
   Inicio
@endsection

@section("content")
   <div class="d-flex  flex-column flex-fill justify-content-center align-items-center" style="height: 90vh;">
      <h1 class="fw-bold">Bienvenido!!</h1>
      @auth
         <h1 class="text-primary fw-bold">
            {{$user->name}}
         </h1>
      @endauth
   </div>
@endsection
