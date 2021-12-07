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
                        <form action="{{route('update.lesson', $lesson->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="teacher">Nama guru</label>
                                        <select name="teacher" id="teacher" class="form-control">
                                            <option value="" selected disabled>Pilih nama guru</option>
                                            <option value="Guru 1">Guru 1</option>
                                            <option value="Guru 2">Guru 2</option>
                                            <option value="Guru 3">Guru 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="class">Kelas</label>
                                        <select name="class" id="class" class="form-control">
                                            <option value="" selected disabled>Pilih nama Kelas</option>
                                            <option value="x">X</option>
                                            <option value="xi">XI</option>
                                            <option value="xii">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nama Pelajaran</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Pelajaran" value="{{ $lesson->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jam_masuk">Jam Masuk</label>
                                        <input type="time" name="jam_masuk" id="jam_masuk" class="form-control" placeholder="Jam Masuk" value="{{ $lesson->jam_masuk }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jam_selesai">Jam Selesai</label>
                                        <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" placeholder="Jam Selesai" value="{{ $lesson->jam_selesai }}">
                                    </div>
                                </div>
                                <div class="mt-2 ml-3">
                                    <button type="submit" class="btn btn-outline-info">Add new lesson</button>
                                    <a href="{{ route('home') }}" class="btn btn-outline-secondary">Back To Home</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
