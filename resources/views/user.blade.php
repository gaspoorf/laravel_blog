<div>
    <p>ID : {{ $user->id }}</p>
    <p>Nom : {{ $user->name }}</p>
    <p>Pseudo : {{ $user->username }}</p>
    <p>Email : {{ $user->email }}</p>

    <a href="{{ route('users') }}">Retour à la liste des posts</a>

</div>
