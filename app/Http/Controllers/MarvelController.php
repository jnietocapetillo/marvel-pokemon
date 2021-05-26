<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarvelController extends Controller
{
    public function listado()
    {
        $url='https://gateway.marvel.com:443/v1/public/characters?ts=1615924046&apikey=0724f66ee27b877a058d4b2515134b03&hash=909fe31e6fc5a43b7947d9a0d785a666';

        //nos traemos los datos
        $json = file_get_contents($url);
        $listado = json_decode($json,true);
        $personajes = $listado['data']['results'];

        
        //print_r($listado['data']['results']['0']); die();
        return view('listadoMarvel',['listado'=>$personajes]);
    }

    public function listadoComics()
    {
        $url='https://gateway.marvel.com:443/v1/public/comics?ts=1615924046&apikey=0724f66ee27b877a058d4b2515134b03&hash=909fe31e6fc5a43b7947d9a0d785a666';
        //nos traemos los comics
        $json = file_get_contents($url);
        $listado = json_decode($json, true);

        $comics = $listado['data']['results'];

        return view('comicsMarvel', ['comics' => $comics]);
    }

    public function personajeID(Request $request)
    {
        $id = $request ->id;
        $url_host = 'https://gateway.marvel.com:443/v1/public/characters?';
        $url_personaje = 'id='.$id;
        $url_key = '&ts=1615924046&apikey=0724f66ee27b877a058d4b2515134b03&hash=909fe31e6fc5a43b7947d9a0d785a666';
        $url = $url_host.$url_personaje.$url_key;

        $json = file_get_contents($url);
        $personaje = json_decode($json, true);
        $el_personaje = $personaje['data']['results'];
        
        return view('personajeMarvel',['personaje'=>$el_personaje]);
    }
}


