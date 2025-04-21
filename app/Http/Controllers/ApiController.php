<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function paginainicio(){
        return view('paginainicio');
    }
    public function getPersonajes()
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page=1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
        
        foreach ($resultado['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'imagen' => $personaje['image'],
                'especie' => $personaje['species'],
                'origen' => $personaje['origin']['name']
            ];
        }
        return view('paginainicio',['personajes' => $personajes]);
    }
}