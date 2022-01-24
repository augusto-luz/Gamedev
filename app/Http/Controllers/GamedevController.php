<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formulario;

class GamedevController extends Controller
{
    public function index() {
        $nome = "Augusto";
        $idade = 30;

        $nomes = ["Augusto", "Maria", "joão", "saulo"];

        return view('welcome',
[
    'nome' => $nome,
    'idade2' => $idade,
    'profissao' => "Programador",
    'nomes' => $nomes
]);
 }
        public function create() {
            $formularios = Formulario::all();
        return view ('reportBugs.create' , [ 'formularios' => $formularios]);
        }

        public function forum() {
            return view ('noticias.forum');
        }

        public function contact() {
            return view ('contatos.contact');
        }


}
