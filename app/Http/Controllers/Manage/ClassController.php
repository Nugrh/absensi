<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // index
    public function index(){
        return view('manage.kelas.index');
    }

    public function create(){
        return view('manage.kelas.create');
    }
}
