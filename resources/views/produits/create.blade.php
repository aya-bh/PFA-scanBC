@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Ajouter un produit</h2>
        <div class="lead">
            Ajouter un produit
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('produits.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input value="{{ old('nom') }}" 
                        type="text" 
                        class="form-control" 
                        name="nom" 
                        placeholder="Nom" required>

                    @if ($errors->has('nom'))
                        <span class="text-danger text-left">{{ $errors->first('nom') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}" 
                        type="text" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantité</label>
                    <input value="{{ old('quantite') }}" 
                    type="number" 
                    class="form-control" 
                    name="quantite" 
                    placeholder="quantite" required>

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
