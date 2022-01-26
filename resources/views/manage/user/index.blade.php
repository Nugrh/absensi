@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header border-0 bg-white shadow-sm">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('manage.add.form.invite')}}" class="btn btn-outline-info">Invite New Member</a>
                            <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mt-2 mb-2">
                            <a href="" class="btn btn-outline-info">Manage Student</a>
                            <a href="" class="btn btn-outline-secondary">Manage Teacher</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles->implode('name', ', ') }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('edit.user', $user->id) }}" class="btn btn-outline-info btn-sm" type="submit">Edit</a>
                                                <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        @empty
                                            <td colspan="5">No record found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
