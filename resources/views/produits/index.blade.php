@extends('layouts.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listes des Produits</h3>
            <div class="lead">
                <a href="{{ route('produits.create') }}" class="btn btn-primary btn-sm float-right swalDefaultSuccess"><i
                        class="fas fa-plus"></i>&nbsp; Ajouter</a>
            </div>

            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Code à barre</th>
                        <th>Nom du produit</th>
                        <th>QR code</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $key => $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->codebarre_id }}</td>
                            <td>{{ $produit->nom }}</td>
                            <td>{{ $produit->qrcode_id }}</td>
                            <td class="float-right">
                                <a class="btn btn-info btn-sm p-1" href="{{ route('produits.show', $produit->id) }}"><i
                                        class="fas fa-eye"></i></a>

                                <a class="btn btn-primary btn-sm p-1" href="{{ route('produits.edit', $produit->id) }}"><i
                                        class="fas fa-edit"></i></a>

                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['produits.destroy', $produit->id],
                                    'style' => 'display:inline',
                                ]) !!}
                                <button type="submit" class="btn btn-danger btn-sm p-1"> <i
                                        class="fas fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Code à barre</th>
                        <th>Nom du produit</th>
                        <th>QR code</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
