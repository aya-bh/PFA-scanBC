@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">Produit</h1>

    <div class="bg-light p-4 rounded">
        <h2>Produits</h2>
        <div class="lead">
            
            <a href="{{ route('produits.create') }}" class="btn btn-primary btn-sm float-right">Ajouter produit</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Code à barre</th>
             <th>Nom du produit</th>
             <th>QR code</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($produits as $key => $produit)
            <tr>
                <td>{{ $produit->id }}</td>
                <td>{{ $produit->codebarre_id }}</td>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->qrcode_id }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('produits.show', $produit->id) }}">Voir</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('produits.edit', $produit->id) }}">Modifier</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['produits.destroy', $produit->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $produits->links() !!}
        </div>

    </div>
@endsection