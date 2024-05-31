@extends('examp.layouts.masrer')
@section('contents')
    <h1>سوالات درس {{$title_quize}}</h1>
    <div class="time_quize">زمان کل آزمون: {{$time_quize }} دقیقه</div>
    @foreach ($truefalsequestions as $index => $truefalsequestion)

        <span>
            <p class="number_question">سوال{{ $index + 1 }}:</p>
            <p class="question">{{$truefalsequestion->title_questions}}</p>
        </span>



        <form action="/google.com" method="post">
        @csrf
            <div style="clear: both; margin-bottom: 10px;">
                <input type="radio" id="option1" name="answer" value="0" >
                <label for="option1" >درست</label>
                <input type="radio" id="option2" name="answer" value="1" >
                <label for="option2" >غلط</label>
            </div>
        </form>

        @endforeach
    <button type="submit">ارسال پاسخ</button>

@endsection
