@extends('home.layouts.master_page')

@section('content')

    @include('home.particles.signup')

    @include('home.particles.login-admins')

    @include('home.particles.login-students')

@endsection

