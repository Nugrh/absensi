<?php

namespace App\Http\Controllers\Manage;

use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LessonController extends Controller
{
//    index
    public function index(){
        $lessons = Lesson::latest()->paginate(6);
        return view('manage.lessons.index', compact('lessons'));    }

//    View Create
    public function create(){
        return view('manage.lessons.create');
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('manage.lessons.edit', compact('lesson'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'teacher' => ['required'],
            'class' => ['required'],
            'jam_masuk' => ['required'],
            'jam_selesai' => ['required'],
        ]);

        Lesson::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        $lesson->update($request->all());

        return Redirect::route('manage.lessons');
    }

    public function destroy(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete($request->all());
        return redirect()->back();
    }


}
