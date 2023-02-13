<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List posts</title>
</head>

<body>
    @include('components.navbar')
    <h3>Posts totales: {{ $posts->count() }}</h3>

    @foreach ($posts as $post)
        <div style="border: 2px solid black; padding: 10px;">
        <b><p >Título: {{ $post->title }}</p></b>
        <p>Autor: {{$post->name}}</p>
        <form id="edit-post" style="display: inline-block; margin-right: 10px;" method="GET" action="{{ route('posts.edit', $post->id) }}">
            <input style="width: 50px; height: 30px;" type="submit" value="Editar">
            @csrf
        </form> 
        <form id="delete-post" style="display: inline-block; margin-right: 10px;" method="POST" action="{{ route('posts.destroy', $post->id) }}">
            <input style="width: 50px; height: 30px;" type="submit" value="Borrar">
            @csrf @method('DELETE')
        </form>
        </div>
        <br>
        <br>
    @endforeach

</body>

</html>
