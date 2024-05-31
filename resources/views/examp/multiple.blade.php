@extends('examp.layouts.masrer')
@section('contents')
    <h1>سوالات درس {{$title_quize}}</h1>
    <div class="time_quize">زمان کل آزمون: {{$time_quize }} دقیقه</div>
    {{-- <div class="time_quize" id="timer">00:00:00</div> --}}
    @foreach ($multipleQuestions as $index => $multipleQuestion)

        <span>
            <p class="number_question">سوال{{ $index + 1 }}:</p>
            <p class="question">{{ $multipleQuestion->title_questions }}</p>
        </span>

        @php
            $options = json_decode($multipleQuestion->options, true);
        @endphp

        <form action="/google.com" method="post">
        @csrf
        @foreach ($options as $key => $option)
            <div style="clear: both; margin-bottom: 10px;">
                <input type="radio" id="option{{ $key }}" name="answer" value="{{ $key }}" >
                <label for="option {{ $key }}" >{{ $option }}</label>
            </div>
        @endforeach
        </form>

        @endforeach
    <button type="submit">ارسال پاسخ</button>
    {{-- <script src="{{ asset('js/timer.js') }}"></script> --}}

@endsection
