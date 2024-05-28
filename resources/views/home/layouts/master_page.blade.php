<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
<div class="header">
    <div class="row">
        <div class="col-md-2">
            <a href="#" class="but-one" onclick="document.getElementById('loginModal').style.display='block'">
                <i class="fa fa-sign-in" aria-hidden="true" style="font-size: 16px; color: white;"></i>
                <span class="title1"><b>ورود</b></span>
            </a>
        </div>
        <div class="col-lg-6">
            <span class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="لگوی سایت"  >
            </span>
        </div>
    </div>
</div>

@yield('content')

<div class="row footer" style="margin-top: 16% ;">
    <div class="box">
        <a href="https://google.com" target="_blank"> درباره ما <i class="fa fa-user-circle" aria-hidden="true"></i> </a>
    </div>
    <div class="col-md-3 box">
        <a href="#" onclick="document.getElementById('loginAdmin').style.display='block'" data-toggle="modal" data-target="#login">   ورود اساتید  <i class="fas fa-user-graduate" aria-hidden="true"></i> </a>
    </div>
    <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#developers">  توسعه دهندگان  <i class="fa fa-code" aria-hidden="true"></i></a>
    </div>
    <div class="col-md-3 box">
        <a href="https://github.com/" target="_blank"> گیتهاب<i class="fa fa-github" aria-hidden="true"></i></a>
    </div>
</div>
<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>


