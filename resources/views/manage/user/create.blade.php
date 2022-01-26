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
                        <form action="{{ route('store.user') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NISN</label>
                                        <input type="text" name="nisn" id="" class="form-control{{ $errors->has('nisn') ? ' is-invalid' : '' }}" placeholder="NISN">

                                        @if($errors->has('nisn'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nisn') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NUPTK</label>
                                        <input type="text" name="nuptk" id="" class="form-control{{ $errors->has('nuptk') ? ' is-invalid' : '' }}" placeholder="NUPTK">
                                        @if($errors->has('nuptk'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nuptk') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="tel" name="phone" id="" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone">
                                        @if($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" name="address" id="" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Address">
                                        @if($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select name="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" id="">
                                            <option value="">Select youre gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password">
                                        @if($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Religion</label>
                                        <select name="religion" class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}" id="">
                                            <option value="">Select youre religion</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                        @if($errors->has('religion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('religion') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="roles">Akses:</label>
                                        <select name="roles" id="roles" class="form-control{{ $errors->has('roles') ? ' is-invalid' : '' }}">
                                            <option value="">PLease select one</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('roles'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('roles') }}</strong>
                                            </span>
                                        @endif
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
