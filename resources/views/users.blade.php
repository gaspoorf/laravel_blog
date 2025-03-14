<div>
    <h1>Utilisateurs</h1>
    <p>salam a tous les royas</p>


    @foreach ($users as $user)
        <div>
            <h2>Pseudo : {{ $user->username }}</h2>
            <a href="{{ route('user', $user->id) }}">Voir l'auteur</a>
        </div>
    @endforeach

</div>
