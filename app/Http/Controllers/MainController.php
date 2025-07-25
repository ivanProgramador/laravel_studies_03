<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showPage()
    {
         //idiomas falado pelas pessoas
         
         $data=[
            'João'=>[

                'Portugues',
                'Inglês'
            ],
            'Maria'=>[
                'Portugues',
                'Espanhol'
            ],
            'Ana'=>[
                'Portugues',
            ]
         ];


         return view('home',['pessoas_linguas' => $data ]);

    }   
    
}
