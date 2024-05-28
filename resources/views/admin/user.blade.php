@extends('admin.layouts.master_page')


@section('content')

    @include('admin.particles.user_table' , compact('users'))

@endsection



