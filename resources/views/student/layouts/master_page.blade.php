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

<div class="header">
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="لگوی سایت"  >
                </span>
                <span class="header-name-account">
                        <i class="fas fa-user" style="color: orange; padding-right: 60rem;"></i>
                        <span class="pull-title1" >سلام :کاربر تست </span>
                        <span class="pull-sign-out-title">
                            <i class="fas fa-sign-out-alt"></i>
                            <a href="{{route('logout')}}" class="log">خروج</a>
                        </span>
                    </span>
            </div>
        </div>
    </div>
</div>




<div class="navbar-collapse" id="example-navbar-collapse">
    <ul class="navbar-nav">
        <li class="active" >
            <a  href="{{ url('/Panel') }}" >
                <i class="fas fa-home"></i>صفحه اصلی
            </a>
        </li>
        <li >
            <a  href="{{ url('/Panel/history') }}" >
                <i class="fas fa-history"></i>تاریخچه
            </a>
        </li>
        <li>
            <a  href="{{ url('/Panel/rank') }}" >
                <i class="fas fa-trophy"></i>رتبه بندی
            </a>
        </li>
    </ul>
</div>


@yield('content')
{{--<script src="{{ asset('js/admin_page.js') }}"></script>--}}
</body>
</html>
