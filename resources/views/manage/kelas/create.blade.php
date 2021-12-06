@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header shadow-sm bg-white">
                        <h4 class="text-secondary">
                            Enter the information to add a new class, enter the class correctly
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Kelas</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Jam Masuk">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Walikelas</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Jam Masuk">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <option value="">
                                            <select name="" id=""></select>
                                        </option>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Jumlah Siswa</label>
                                        <input type="text" name="phone" id="" class="form-control" placeholder="Jam Masuk">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection