@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header shadow-sm bg-white">
                        <h4 class="text-secondary">
                            Enter the information to add a new user, enter the data correctly
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ 'update.edit', $user->id }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NISN</label>
                                        <input type="text" name="nisn" id="" class="form-control" placeholder="NISN" value="{{ $user->nisn ?? '-'}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NUPTK</label>
                                        <input type="text" name="nuptk" id="" class="form-control" placeholder="NUPTK" value="{{ $user->nuptk ?? '-'}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" name="name" id="" class="form-control" placeholder="User name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Phone" value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" id="" class="form-control" placeholder="Address" value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="male" {{ $user->gender == 'male' ? 'selected' : ''}}>Male</option>
                                            <option value="female" {{ $user->gender == 'female' ? 'selected' : ''}}>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control" placeholder="E-mail" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Relogion</label>
                                        <select name="religion" class="form-control" id="">
                                            <option value="islam" {{ $user->religion == 'islam`  ' ? 'selected' : ''}}>Islam</option>
                                            <option value="kristen" {{ $user->religion == 'kristen' ? 'selected' : ''}}>Kristen</option>
                                            <option value="hindu" {{ $user->religion == 'hindu' ? 'selected' : ''}}>Hindu</option>
                                            <option value="budha" {{ $user->religion == 'budha' ? 'selected' : ''}}>Budha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="roles">Akses:</label>
                                        <select name="roles" id="roles" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{$role}}" {{$user->roles->implode('name', ', ') == $role ? 'selected' : ''}}>{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-2 ml-3">
                                    <button class="btn btn-outline-info">Invite Member</button>
                                    <a href="{{route('home')}}" class="btn btn-outline-secondary">Back To Home</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
