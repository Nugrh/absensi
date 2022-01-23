<?php

namespace App\Http\Controllers\Manage;

use App\Clas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // index
    public function index(){
        $classes = Clas::latest()->paginate(6);

        return view('manage.kelas.index', compact('classes'));
    }

    public function create(){
        return view('manage.kelas.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'      => 'required',
            'walas'     => 'required',
            'jurusan'   => 'required',
            'jumlah'    => 'required',
        ]);

        Clas::create([
            'name'      => $request->name,
            'walas'     => $request->walas,
            'jurusan'   => $request->jurusan,
            'jumlah'    => $request->jumlah,
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {

        $class = Clas::all()->find($id);
//        $class = Clas::findOrFail(1);

        return view('manage.kelas.edit', compact('class'));
    }
}
