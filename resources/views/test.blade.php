<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="dropdown">
    <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">主题
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="#">Java</a>
        </li>
        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="#">数据挖掘</a>
        </li>
        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="#">数据通信/网络</a>
        </li>
        <li role="presentation" class="divider"></li>
        <li role="presentation">
            <a role="menuitem" tabindex="-1" href="#">分离的链接</a>
        </li>
    </ul>
</div>
    {{--<a href="{{url('/test')}}"><img src="{{asset('images/Connect_logo_1.png')}}" alt=""></a>--}}
    {{--<a href=""><img src="{{asset('images/Connect_logo_3.png')}}" alt=""></a>--}}
    {{--<a href=""><img src="{{asset('images/Connect_logo_7.png')}}" alt=""></a>--}}
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
