<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Mateus";
        $idade = 20;

        $arr = [10, 20, 30, 40, 50];

        $nomes = ["Mateus", "Maria", "João", "Saulo"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function contacts() {
        return view('contact');
    }

    public function products() {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function product($id) {
        return view('product', ['id' => $id]);
    }
}