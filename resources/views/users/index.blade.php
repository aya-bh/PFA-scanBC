@extends('layouts.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listes des Utilisateurs</h3>
            <div class="lead">
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right swalDefaultSuccess"><i class="fas fa-plus"></i> &nbsp; Ajouter</a>
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
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Nom d'Utilisateur</th>
                        <th>Roles</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-info">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td class="float-right">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm p-1"><i class="fas fa-eye"></i></a>

                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm p-1"><i class="fas fa-edit"></i></a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                <button type="submit" class="btn btn-danger btn-sm p-1"> <i class="fas fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Nom d'Utilisateur</th>
                        <th>Roles</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
