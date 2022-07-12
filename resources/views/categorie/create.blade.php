@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2> Ajouter Catégorie</h2>
        <div class="lead">
            Ajouter Catégorie
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('categorie.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">nom</label>
                    <input value="{{ old('nom') }}" 
                        type="text" 
                        class="form-control" 
                        name="nom" 
                        placeholder="Nom" required>

                    @if ($errors->has('nom'))
                        <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
                    @endif
                </div>

                

                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('categorie.index') }}" class="btn btn-default">Annuler</a>
            </form>
        </div>

    </div>
@endsection
