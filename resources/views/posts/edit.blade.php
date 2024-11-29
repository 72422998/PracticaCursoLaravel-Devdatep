<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>
    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('posts.update',$post)}}" method="POST">
         @csrf
         @method('PUT')
        <label for="title">Titulo:</label>
        <input type="text" name="title" value="{{old('title',$post->title)}}">

        <br>
        <br>

        <label for="slug">Slug:</label>
        <input type="text" name="slug" value="{{old('slug',$post->slug)}}">

        <br>
        <br>

        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" value="{{old('categoria',$post->categoria)}}">

        <br>
        <br>

        <label for="content">Contenido:</label>
        <textarea name="content" >{{old('content',$post->content)}}</textarea>

        <br>
        <br>

        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>