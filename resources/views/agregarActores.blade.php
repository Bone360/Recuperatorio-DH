@extends('layouts.app')
@section('content')
    <h2 class="text-center">Agregar Actor</h2>
    <div class="container-fluid">
            <div class="row mt-5">
        <div class="col-lg-8 offset-lg-2">
            @if (count($errors->all())>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}} </li>
                    @endforeach
                </ul>
            @endif

            <form action="/guardarActor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="first_name" id="nombre" value="{{old('first_name')}}">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="last_name" id="apellido" value="{{old('last_name')}}">
                </div>
                <div class="form-group">
                    <label for="ratingActor">Rating</label>
                    <input type="number" class="form-control" name="rating" id="ratingPelicula" value="{{old('rating')}}">
                </div>

                <div class="form-group">
                    <label for="peliculas">Película</label>
                    
                    <select class="form-control" name="favorite_movie_id" id="peliculas">
                        <option value="#" >Seleccione Pelicula</option>
                        @foreach ($peliculas as $pelicula)
                            <option value="{{$pelicula->id}}">{{$pelicula->title}}</option>
                        @endforeach
                    </select>        
                </div>
      
                    
                <button type="submit" class="btn btn-primary">Registrar Actor</button>
            </form>
            
        </div>
    </div>
    </div>


@endsection