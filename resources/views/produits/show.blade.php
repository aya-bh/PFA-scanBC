
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

    <div class="float-right">
        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-danger">Modifier</a>
        <button data-dismiss="modal" type="button" class="btn btn-default">Annuler</button>
    </div>