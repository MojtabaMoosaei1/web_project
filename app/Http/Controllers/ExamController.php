<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
//        dd(request()->all());
        return view('student.home' );
    }
    public function history()
    {
        return view('student.history');
    }

}