@extends('admin.layouts.master_page')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/create_quize.css')}}">

@section('content')
<div class="container">
    <h2 class="title">ایجاد آزمون جدید</h2>
    @if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form id="originalForm">
        @csrf
        <div class="row">
            <div class="col">
                <input class="input_text" type="text" placeholder="عنوان کوویز" aria-label="First name" name="title">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input class="input_text" type="number" placeholder="تعداد سوالات " aria-label="First name" name="count">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input class="input_text" type="number" placeholder="مدت زمان (دقیقه)" aria-label="First name" name="min">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="number" placeholder="امتیاز یا نمره کلی" aria-label="First name" name="score">
            </div>
        </div>
        <div class="row">
            <div class="type">
                <div class="col">
                    <select class="input_text" id="quizType" name="type_quize">
                        <option value="" selected disabled>نوع امتحان</option>
                        <option value="multipleChoice">چهارگزینه‌ای</option>
                        <option value="trueFalse">درست/غلط</option>
                        <option value="descriptive">تشریحی</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="button">ایجاد کوییز</button>
    </form>
</div>
<script src="{{ asset('js/create_quize.js') }}"></script>
@endsection
