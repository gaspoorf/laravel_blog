@extends('layout.app')


@section('content')
<div>
    <h1>Blooog</h1>
    <p>salam a tous les royas</p>

    {{-- {{ dd($posts) }} --}}

    @foreach ($posts as $post)
        <div>
            <h2>ID USER : {{ $post->userId }}</h2>
            <p> Titre : {{ $post->title }}</p>
            <p> Contenu : {{ $post->body }}</p>
            <a href="{{ route('post', $post->id) }}">Voir l'auteur</a>
            <a href="{{ route('post', $post->id) }}">Voir le post</a>
        </div>
    @endforeach

</div>

@endsection
