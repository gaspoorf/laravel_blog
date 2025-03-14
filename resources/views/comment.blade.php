<div>
    <h2> Votre commentaire a bien été ajouté ! </h2>
    <p> Recapitulatif de votre commentaire : </p>
    <div>
        <p>Nom : {{ $comment->lastname }}</p>
        <p>Prenom : {{ $comment->firstname }}</p>
        <p>Email : {{ $comment->email }}</p>
        <p>Commentaire : {{ $comment->comment }}</p>
        <p>Post ID : {{ $comment->postId }}</p>
    </div>

    <a href="{{ route('blog') }}">Retour à la liste des posts</a>


</div>
