@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">Liste des Catégorie</h1>

    <div class="bg-light p-4 rounded">
        <h2>Catégorie</h2>
        <div class="lead">
        
            <a href="{{ route('categorie.create') }}" class="btn btn-primary btn-sm float-right">Ajouter catégorie</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Nom</th>
             <th width="3%" colspan="2">Action</th>
          </tr>
            @foreach ($categories as $key => $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->nom }}</td>
                
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('categorie.edit', $categorie->id) }}">Modifier</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['categorie.destroy', $categorie->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $categories->links() !!}
        </div>

    </div>
@endsection