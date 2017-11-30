<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    <script type="text/javascript">
        var childWindow;
        function toQzoneLogin()
        {
            childWindow = window.open("{{url('login')}}","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
        }
    </script>
</head>
<body>
    <a href="{{url('/test')}}"><img src="{{asset('images/Connect_logo_1.png')}}" alt=""></a>
    <a href="#" onclick='toQzoneLogin()' ><img src="{{asset('images/Connect_logo_3.png')}}" alt=""></a>
    <a href=""><img src="{{asset('images/Connect_logo_7.png')}}" alt=""></a>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
