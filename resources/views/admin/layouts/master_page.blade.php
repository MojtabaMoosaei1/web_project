
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/admin_page.css')}}">



</head>
<body >
<div class="header-main">
            <div class="column">
                <span class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="لگوی سایت"  >
                </span>
                <span class="header-name-account">
                        <i class="fas fa-user" style="color: orange; padding-right: 60rem;"></i>
                    {{-- @foreach($admins as $admin) --}}
                        <span class="hello-account" >سلام : admin</span>
                        {{-- {{$admin->name}} --}}
                    {{-- @endforeach --}}
                        <span class="sign-out">
                            <i class="fas fa-sign-out-alt"></i>
                            <a href="{{url('logout')}}" class="logout">خروج</a>
                        </span>
                </span>
            </div>
</div>

<div class="navbar" id="example-navbar-collapse">
    <ul class="navbar-list">
        <li class="border-dash" >
            <a href="#" >
                داشبورد
            </a>
        </li>
        <li >


            <a href="{{ url('Dashboard/') }}" >
                <i class="fas fa-home"></i>صفحه اصلی
            </a>
        </li>
        <li >

            <a href="{{ url('/Dashboard/user') }}" >
                <i class="fas fa-user"></i>کاربران
            </a>
        </li>
        <li >
            <a href="{{ url('/Dashboard/rank') }}">
                <i class="fas fa-trophy"></i>رتبه بندی
            </a>
        </li>
        <li>
            <a href="{{ url('/Dashboard/create') }}">
                <i class="fas fa-clipboard-list"></i> کوویز جدید
            </a>

        </li>
    </ul>

</div>


@yield('content')

{{--<script src="{{ asset('js/admin_page.js') }}"></script>--}}
</body>
</html>
