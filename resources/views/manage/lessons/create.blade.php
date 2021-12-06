@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header shadow-sm bg-white">
                        <h4 class="text-secondary">
                            Enter the information to add a new lesson, enter the lesson correctly
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama guru</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih nama guru</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kelas</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih nama Kelas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Pelajaran</label>
                                        <input type="text" name="name" id="" class="form-control" placeholder="Nama Pelajaran">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jam Masuk</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Jam Masuk">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jam Selesai</label>
                                        <input type="text" name="address" id="" class="form-control" placeholder="Jam Selesai">
                                    </div>
                                </div>
                                <div class="mt-2 ml-3">
                                    <button class="btn btn-outline-info">Add new lesson</button>
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
