<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MultipleQuestion;
use App\Models\Multiplequestions;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index' , ['quizzes'=> Quiz::all()]);
    }


    public function user()
    {
        return view('admin.user', ['admins' => Admin::all() , 'users'=>User::all()] );
    }

    public function create()
    {
        return view('admin.quize');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $messages =
        [
            'title.required' => 'فیلد عنوان اجباری است ',
            'title.max' => 'طول عنوان باید کمتر از 150 کارکتر باشد',
            'count.required' => 'تعداد سوالات اجباری است ',
            'count.max' => 'تعداد سوالات بیشتر از 200 تا نمیتواند باشد',

        ];
        $data = request()->validate([
            'title' => 'required|max:150|regex:/^[آ-یa-zA-Z\s]+$/u',
            'count' => 'required|numeric|max:200',
            'min' => 'required|min:1|max:240|numeric',
            'score' => 'required|min:1|numeric',
            'type_quize' => 'required|in:multipleChoice,trueFalse,descriptive',
            'questions.*.text' => 'required|regex:/^[آ-یa-zA-Z\s]+$/u',
            'questions.*.options' => 'required|array',
            'questions.*.options.*' => 'required',
            'questions.*.correct_option' => 'required|numeric|in:1,2,3,4'
        ]);
        $quize = Quiz::create([
            'title' => $data['title'],
            'question_count' => $data['count'],
            'score' => $data['score'],
            'time_limit' => $data['min'],
        ]);
        if ($data['type_quize'] === 'multipleChoice')
        {
            foreach($data['questions'] as $questionData)
            {

                Multiplequestion::create([
                    'quize_id' => $quize->id,
                    'title_questions' => $questionData['text'],
                    'type'=>$data['type_quize'],
                    'options' =>json_encode($questionData['options']),
                    'correct' => $questionData['correct_option'],

                ]);
            }
        }
        /*
        elseif($data['type_quize'] === 'trueFalse')
        {
            foreach($data['questions'] as $questionData)
            {

                -----Truefalsequestion------::create([
                    'quize_id' => $quize->id,
                    'title_questions' => $data['title'],
                    'type'=>$data['type_quize'],
                    'options' =>json_encode($questionData['options']),
                    'correct' => $questionData['correct_option'],

                ]);
            }
        }*/



       return redirect()->route('Dashboard');
    }




}
