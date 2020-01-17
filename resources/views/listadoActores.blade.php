@extends('layouts.app')
@section('content')
    <h2 class="text-center">Listado de Actores</h2>
    <div>
        
    </div>
   
    <div class="spacer">
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ver</th>
            
        </tr>
        </thead>
        <tbody>
           
            @foreach ($actors as $key => $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->first_name}}</td>
                <td>{{$value->last_name}}</td>
                <td><a href="/detalleActor/{{$value->id}}"><ion-icon name="eye"></ion-icon></a></td>               
                </tr>

            @endforeach
        <tr>

        </tr>
        </tbody>
    </table>
    <div>
        {{$actors->links()}}
    </div>
    
    </div>    

@endsection