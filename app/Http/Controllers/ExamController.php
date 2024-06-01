<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Multiplequestion;
use App\Models\Truefalsequestion;
use App\Models\Descriptivequestion;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $name = auth()->user()->name;
        return view('student.home' , ['quizzes'=>Quiz::all(),'name'=>$name]);
    }
    public function history()
    {
        $name = auth()->user()->name;
        return view('student.history', ['name'=>$name]);
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
            return view('examp.multiple' , ['multipleQuestions'=> $multipleQuestions , 'title_quize'=>$title_quize ,'time_quize' => $time_quize ]);
        }
        elseif($type_quize == 'trueFalse')
        {
            $title_quize = $quize->title;
            $time_quize = $quize->time_limit;
            $truefalsequestions = Truefalsequestion::where('quize_id', $id)->get();
            return view('examp.truefalse' , ['truefalsequestions'=> $truefalsequestions , 'title_quize'=>$title_quize ,'time_quize' => $time_quize ]);
        }
        $title_quize = $quize->title;
        $time_quize = $quize->time_limit;
        $descriptivequestions = Descriptivequestion::where('quize_id', $id)->get();
        return view('examp.descriptive' , ['truefalsequestions'=> $descriptivequestions , 'title_quize'=>$title_quize ,'time_quize' => $time_quize ]);
    }



        // dd($quize);

    }


