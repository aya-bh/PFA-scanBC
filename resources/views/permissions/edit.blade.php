@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Modifier permission</h2>
        <div class="lead">
            Modifier permission.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input value="{{ $permission->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Nom" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer permission</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Annuler</a>
            </form>
        </div>

    </div>
@endsection