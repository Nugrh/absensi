@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header border-0 bg-white shadow-sm">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('manage.add.form.lesson') }}" class="btn btn-outline-info">Add New Member</a>
                            <a href="{{ route('home') }}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>Nama Pelajaran</th>
                                        <th>Kelas</th>
                                        <th>Jam</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Sorry, currently lesson is not available, please add new lesson
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
