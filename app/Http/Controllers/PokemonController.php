<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listado()
    {
        $url='https://pokeapi.co/api/v2/pokemon/?limit=20&offset=20';

        //nos traemos los datos
        $json = file_get_contents($url);
        $listado = json_decode($json,true);
        $personajes = $listado['results'];

        return view('listadoPokemon',['listado'=>$personajes]);
    }
    public function contents()
    {
        $url='https://pokeapi.co/api/v2/pokemon/?limit=20&offset=20';

        //nos traemos los datos
        $json = file_get_contents($url);
        $listado = json_decode($json,true);
        $personajes = $listado['results'];

        return view('contentsPokemon',['listado'=>$personajes]);
    }

}
