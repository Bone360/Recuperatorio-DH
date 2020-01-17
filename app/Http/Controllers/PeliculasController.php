<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;
use App\Genre;

class PeliculasController extends Controller
{
    public function indexHome(){
        $peliculas = Movie::all();
        return view('home')->with('peliculas',$peliculas);
    }

    

    public function show($id){
        
        $pelicula = Movie::find($id);
        
        return view('detallePelicula')->with('pelicula',$pelicula);
    }
    public function showListado()
    {
        $peliculas = Movie::paginate(10);
        return view('listadoPeliculas')->with('peliculas',$peliculas);
    }
    
    public function edit($id)
	{
		
        $peliculaEditar = Movie::find($id);
        
        $generos = Genre::all();
        $generoEditado = Genre::find($peliculaEditar->genre_id);
        
        //return view('movies.editarPelicula', compact('peliculaEditar', 'generos','generoEditado'));

        return view('editarPelicula')->with('peliculaEditar', $peliculaEditar);
        
    }
    
    public function update(Request $request, $id){
        
	
		$peliculaEditar = Movie::find($id);
        
		$peliculaEditar->title = $request->input('title');
		$peliculaEditar->rating = $request->input('rating');
		$peliculaEditar->awards = $request->input('awards');
		$peliculaEditar->release_date = $request->input('release_date');
		$peliculaEditar->length = $request->input('length');
		//$peliculaEditar->genre_id = $request->input('genre_id');


        
		$peliculaEditar->save();

		
		return redirect('listadoPeliculas');
    }
}
