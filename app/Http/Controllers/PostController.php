<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->paginate(10);
        
        return view('posts.index',compact('posts'));
    }
    public function create(){

        return view('posts.create');
    }
    public function store(StorePostRequest $request){
        $post = Post::create($request->all());
        Mail::to('prueba@prueba.com')->send(new PostCreateMail($post));
        return redirect()->route('posts.index');
    }
    public function show(Post $post){
        return view('posts.show',compact('post'));
    }
    public function edit(Post $post){

        return view('posts.edit',compact('post'));
    }
    public function update(Request $request,Post $post){
        $request->validate([
            'title' => 'required | min:5 | max:255',
            'slug' => "required | unique:posts,slug,{$post->id}",
            'categoria' => ['required',' min:5',' max:255'],
            'content' => 'required',
        ]);
        $post->update($request->all());

        return redirect()->route('posts.show',$post);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
