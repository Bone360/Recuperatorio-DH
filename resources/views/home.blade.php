@extends('layouts.app')

@section('content')

<div class="container-fluid">
<main>
    <h2 class="__peliculasdeldia">Películas</h2>

    <div class="__peliculas row">
      @foreach ($peliculas as $pelicula)
          <div class="d-flex card col-12 col-md-4 col-lg-3 __itempelicula" style="width: 18rem;">
        
         
          <div class="card-body">
            <p class="card-text __textopelicula">{{$pelicula->title}}</p>
            <a href="detallePelicula/{{$pelicula->id}}" class="d-flex btn btn-primary __detalle">Ver Más</a>
          </div>
      </div>
      @endforeach      
    </div>
  </main>





  </div>
@endsection
