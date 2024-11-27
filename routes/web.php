<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/',HomeController::class);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class,'show']);
// Route::get('/posts/{post}/{category}', function ($post,$category) {
//     return "Aqui se monstrará el post {$post} de la categoria {$category}";
// });
Route::get('prueba',function(){
    //Crear nuevo post 
    // $post = new Post;

    // $post->title = 'TiTulo DE prueBA 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'Categoria de prueba 4';

    // $post->save();
    // return $post;

    
    $post = Post::find(5);
    return $post;
    //Actualizar registro
    // $post = Post::where('title','Titulo de prueba 1')
    //              ->first();

    // $post->categoria = 'Desarrollo web';
    // $post->save();

    //Listar todos los posts
    // $post = Post::orderBy('categoria','asc')
    //             ->select('id','title','categoria')
    //             ->take(2)
    //             ->get();

    // $post = Post::find(1);
    // $post->delete();    
    //  return 'Eliminado correctamente';



});
