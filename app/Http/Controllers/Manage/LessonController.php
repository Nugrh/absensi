<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
//    index
    public function index(){
        return view('manage.lessons.index');
    }

//    View Create
    public function create(){
        return view('manage.lessons.create');
    }
}
