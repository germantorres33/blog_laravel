<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a nuestra pagina cursos";
    }

    public function create(){
        return "En este página podrás crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso: $curso";
    }
}
