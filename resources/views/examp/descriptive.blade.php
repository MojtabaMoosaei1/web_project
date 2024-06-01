
@extends('examp.layouts.masrer')
@section('contents')
    <h1>سوالات درس {{$title_quize}}</h1>
    <div class="time_quize">زمان کل آزمون: {{$time_quize }} دقیقه</div><br><br>
    @foreach ($truefalsequestions as $index => $truefalsequestion)
        <span>
            <p class="number_question">سوال{{ $index + 1 }}:</p>
            <p class="question">{{$truefalsequestion->title_questions}}</p>
        </span>

        <form action="/google.com" method="post">
        @csrf
            <input class="input" type="text" id="option1" name="answer" >
        </form>

        @endforeach
    <button type="submit">ارسال پاسخ</button>

@endsection
