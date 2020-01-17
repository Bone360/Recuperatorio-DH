@extends('layouts.app')
@section('content')
<h2 class="text-center">Detalle del Actor</h2>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title text-center"></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi minima nemo expedita distinctio ipsa eum magnam fugiat! Aspernatur, illo.</p>
            </div>
            <ul class="list-group list-group-flush">
                
                <li class="list-group-item ">Calificación: {{$actor->rating}} </li>
                <li class="list-group-item">Nombre: {{$actor->first_name}}</li>
                <li class="list-group-item">Apellido: {{$actor->last_name}}</li>
            </ul>
            
        </div>
       
        <br>
        <a href="{{route('home')}}" class="btn btn-danger">Volver</a>
        
        
    </div>

</div>

@endsection