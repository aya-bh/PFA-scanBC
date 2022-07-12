@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Modifier produit</h2>
        <div class="lead">
            Modifier Produit
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('produits.update', $produit->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input value="{{ $produit->nom }}" type="text" class="form-control" name="nom" placeholder="Nom"
                        required>

                    @if ($errors->has('nom'))
                        <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ $produit->description }}" type="text" class="form-control" name="description"
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantité</label>
                    <input value="{{ $post->description }}" type="text" class="form-control" name="quantite"
                        placeholder="Quantité" required>

                    @if ($errors->has('quantite'))
                        <span class="text-danger text-left">{{ $errors->first('quantite') }}</span>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('produits.index') }}" class="btn btn-default">Annuler</a>
            </form>
        </div>

    </div>
@endsection
