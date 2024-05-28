<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
//        dd(request()->all());
        return view('student.home' , ['quizzes'=>Quiz::all()]);
    }
    public function history()
    {
        return view('student.history');
    }

}
