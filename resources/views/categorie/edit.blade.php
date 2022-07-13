<form method="POST" action="{{ route('categorie.update', $categorie->id) }}">
    @method('patch')
    @csrf
    <h4 class="modal-title center mb-2">Modifier Catégorie</h4>

    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input value="{{ $categorie->nom }}" type="text" class="form-control" name="nom" placeholder="Nom" required>

        @if ($errors->has('nom'))
            <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
        @endif
    </div>

    <div class="float-right">

        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <a href="{{ route('categorie.index') }}" class="btn btn-default">Annuler</a>
    </div>
</form>
