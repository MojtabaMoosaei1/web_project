<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Multiplequestion;
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
    public function show_examp($id)
    {

        $quize = Quiz::find($id);
        if($quize == null)
        {
            abort('404');
        }

        $type_quize =$quize->getAttribute('type');
        if ($type_quize == 'multipleChoice')
        {
            $title_quize = $quize->title;
            $time_quize = $quize->time_limit;
            $multipleQuestions = Multiplequestion::where('quize_id', $id)->get();
            return view('examp.exmap' , ['multipleQuestions'=> $multipleQuestions , 'title_quize'=>$title_quize ,'time_quize' => $time_quize ]);
        }
        // dd($quize);

    }

}
