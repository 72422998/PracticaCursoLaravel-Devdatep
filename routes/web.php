<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/',HomeController::class);
// Route::get('/posts',[PostController::class,'index'])->name('posts.index');
// Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
// Route::post('/posts',[PostController::class,'store'])->name('posts.store');
// Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update');
// Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Route::resource('posts',PostController::class);
// Route::get('/posts/{post}/{category}', function ($post,$category) {
//     return "Aqui se monstrará el post {$post} de la categoria {$category}";
// });
Route::get('prueba',function(){
    
    
    $post = Post::find(1);

    return dd($post->is_active);
   



});
