<div class="bg-light p-4 rounded">
    <h3>Voir Utilisateur</h3>
    <div class="lead">

    </div>

    <div class="container mt-4">
        <div>
            Nom: {{ $user->name }}
        </div>
        <div>
            Email: {{ $user->email }}
        </div>
        <div>
            Nom d'Utilisateur: {{ $user->username }}
        </div>
    </div>

</div>
<div class="float-right">
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-danger">Modifier</a>
    <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
</div>

