@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Afficher produit</h2>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Nom: {{ $produit->nom }}
            </div>
            <div>
                Description: {{ $produit->description }}
            </div>
            <div>
                Quantité: {{ $produit->quantite }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-info">Modifier</a>
        <a href="{{ route('produits.index') }}" class="btn btn-default">Retourner</a>
    </div>
@endsection