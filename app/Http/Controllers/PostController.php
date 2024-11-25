<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui se monstraran todos los posts";
    }
    public function create(){
        return "Aqui se monstrará un formulario para crear un post";
    }
    public function show($post){
        return "Aqui se monstrará el post {$post}";
    }
}
