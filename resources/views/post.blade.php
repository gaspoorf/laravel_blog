<div>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    
    <h2> Un super commentaire </h2>
    <p>ID : {{ $post->id }}</p>
    <p>User ID : {{ $post->userId }}</p>
    <p>Titre : {{ $post->title }}</p>
    <p>Contenu : {{ $post->body }}</p>

    <a href="{{ route('blog') }}">Retour au blog</a>

    <hr>

    <p> Ajouter un commentaire : </p>
    <form action="{{ route('comment.create') }}" method="post">
        @csrf
        <input type="text" name="lastname" placeholder="Nom"><br>
        <input type="text" name="firstname" placeholder="Prenom"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="hidden" name="postId" value="{{ $post->id }}">
        <textarea name="comment" placeholder="Commentaire"></textarea><br>
        <button type="submit">Ajouter</button>
    </form>

    <hr>
    <p> Commentaires : </p>

    @foreach ($comments as $comment)
        <div>
            <p>Nom : {{ $comment->lastname }}</p>
            <p>Prenom : {{ $comment->firstname }}</p>
            <p>Email : {{ $comment->email }}</p>
            <p>Commentaire : {{ $comment->comment }}</p>
            <form action="{{ route('comment.delete', $comment->id) }}" method="post">
                @csrf
                <button type="submit">Supprimer</button>
            </form>

            <a href="{{ route('comment.edit', $comment->id) }}">Modifier</a>
        </div>
        <hr>
    @endforeach
    <hr>


</div>
