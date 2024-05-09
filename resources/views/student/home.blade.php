@extends('student.layouts.master_page')

@section('content')
    @csrf
    @include('student.particles.home_table')
{{--    @include('student.particles.history_table')--}}
{{--    @include('student.particles.rank_table')--}}



@endsection
