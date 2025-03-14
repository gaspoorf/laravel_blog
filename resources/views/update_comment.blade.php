<div>
    <h2> Modifier votre commentaire : </h2>
    <form action="{{ route('comment.update', $comment->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="lastname" value="{{ $comment->lastname }}" placeholder="Nom"><br>
        <input type="text" name="firstname" value="{{ $comment->firstname }}" placeholder="Prenom"><br>
        <input type="email" name="email" value="{{ $comment->email }}" placeholder="Email"><br>
        <input type="hidden" name="postId" value="{{ $comment->postId }}">
        <textarea name="comment" placeholder="Commentaire">{{ $comment->comment }}</textarea><br>
        <button type="submit">Modifier</button>
    </form>
</div>