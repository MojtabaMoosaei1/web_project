<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Truefalsequestion;
use App\Models\Multiplequestion;
use App\Models\Descriptivequestion;
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


        if(request()->input('type_quize') =='multipleChoice')
        {
            $data = request()->validate([
                'title' => 'required|max:150|regex:/^[آ-یa-zA-Z\s]+[0-9]*$/u',                'count' => 'required|numeric|max:200',
                'min' => 'required|min:1|max:240|numeric',
                'score' => 'required|min:1|numeric',
                'type_quize' => 'required|in:multipleChoice,trueFalse,descriptive',
                'questions.*.text' => 'required|regex:/^[آ-یa-zA-Z\s?؟]+[0-9]*$/um',
                'questions.*.options' => 'required|array',
                'questions.*.options.*' => 'required',
                'questions.*.correct_option' => 'required|numeric|in:1,2,3,4'
            ]);
            $quize = Quiz::create([
                'title' => $data['title'],
                'question_count' => $data['count'],
                'score' => $data['score'],
                'time_limit' => $data['min'],
                'type'=>$data['type_quize'],
            ]);
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
        elseif(request()->input('type_quize') =='trueFalse')
        {
            // dd($request->all());
            $data = request()->validate([
                'title' => 'required|max:150|regex:/^[آ-یa-zA-Z\s]+[0-9]*$/u',
                'count' => 'required|numeric|max:200',
                'min' => 'required|min:1|max:240|numeric',
                'score' => 'required|min:1|string',
                'type_quize' => 'required|in:multipleChoice,trueFalse,descriptive',
                'questions.*.text' => 'required|regex:/^[آ-یa-zA-Z\s?؟]+[0-9]*$/um',
                'questions.*.correct_option' => 'required|string',
            ]);

            $quize = Quiz::create([
                'title' => $data['title'],
                'question_count' => $data['count'],
                'score' => $data['score'],
                'time_limit' => $data['min'],
                'type'=>$data['type_quize'],
            ]);

            foreach($data['questions'] as $questionData)
            {
                Truefalsequestion::create([
                    'quize_id' => $quize->id,
                    'title_questions' => $questionData['text'],
                    'type'=>$data['type_quize'],
                    'correct' => $questionData['correct_option'],

                ]);
            }
        }
        else
        {
            // dd($request);
            $data = request()->validate([
                'title' => 'required|max:150|regex:/^[آ-یa-zA-Z\s]+[0-9]*$/u',
                'count' => 'required|numeric|max:200',
                'min' => 'required|min:1|max:240|numeric',
                'score' => 'required|min:1|string',
                'type_quize' => 'required|in:multipleChoice,trueFalse,descriptive',
                'questions.*.text' => 'required|regex:/^[آ-یa-zA-Z\s?؟]+[0-9]*$/um',
            ]);
            $quize = Quiz::create([
                'title' => $data['title'],
                'question_count' => $data['count'],
                'score' => $data['score'],
                'time_limit' => $data['min'],
                'type'=>$data['type_quize'],
            ]);

            foreach($data['questions'] as $questionData)
            {
                Descriptivequestion::create([
                    'quize_id' => $quize->id,
                    'title_questions' => $questionData['text'],
                    'type'=>$data['type_quize'],
                ]);
            }

        }
       return redirect()->route('Dashboard');
    }

    public function deleted(Request $request)
    {
        // dd(Quiz::find($request));
        if(Quiz::find($request->input('quiz_id')) != null )
        {
            $quize = Quiz::find($request->input('quiz_id'));
            $type_quize = $quize->getAttribute('type');
            if( $type_quize == "multipleChoice")
            {
                $id_multiplechoice =Multiplequestion::where('quize_id' ,$request->input('quiz_id'));
                $id_multiplechoice->delete();
            }
            elseif( $type_quize == "trueFalse")
            {
                $id_truefalse = Truefalsequestion::where('quize_id' ,$request->input('quiz_id') );
                $id_truefalse->delete();
            }
            else
            {
                $id_discript = Descriptivequestion::where('quize_id' ,$request->input('quiz_id') );
                $id_discript->delete();
            }
            $id_quize = Quiz::where('id' ,$request->input('quiz_id') );;
            $id_quize->delete();
        }
        return redirect()->Route('Dashboard');


    }




}
