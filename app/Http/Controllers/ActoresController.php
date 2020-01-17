<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;


class ActoresController extends Controller
{

    //public function showActores(){
        //$actors = Actor::all();
        //return view('actores')->with('actores',$actors);
    //}

    public function show($id){
        
        $actor = Actor::find($id);
        
        return view('detalleActor')->with('actor', $actor);
    }

    public function create(){
        $peliculas = Movie::all();
        
        return view('agregarActores')->with('peliculas', $peliculas);
    }
    public function save(Request $request){
        $actor = new Actor($request->all());
        $actor->save();
        return  redirect('listadoActores');
    }

    public function index()
    {
        $actors = Actor::paginate(10);
            
        return view('listadoActores')->with('actors', $actors);
    }
}
