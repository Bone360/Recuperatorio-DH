@extends('layouts.app')

@section('content')

<div class="container-fluid">
<main>
  <div class="card-body">
            <p class="card-text __textopelicula">{{$pelicula->title}}</p>
            <a href="/detallePelicula/{{$pelicula->id}}" class="d-flex btn btn-primary __detalle">Ver Más</a>
            <a href="/peliculasFavoritas/{{$pelicula->id}}" class="d-flex btn btn_success __comprar">Favoritas</a>
          </div>
</main>




<div class="d-flex">
    <footer class="piedepag row">
      <article class="sucursales col-12 col-md-4 __artpie">
        <h4>Cines</h4>
        

      </article>
      <article class="sucursales col-12 col-md-4 __artpie">
        <h4>Contacto</h4>
        
      </article>
      <article class="sucursales col-12 col-md-4 __artpie">
        <h4>Opciones</h4>
        

      </article>
    </footer>
  </div>
  </div>
@endsection
