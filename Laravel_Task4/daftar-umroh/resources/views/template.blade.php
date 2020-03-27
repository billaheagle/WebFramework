<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nurul Hidayah</title>
    {{--Start Bootstrap--}}
    <link href="{{asset('bootstrap_4_0_0/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> {{--End Bootstrap--}}
</head>

<body>
    <div class="container-fluid">
        @include('navbar') @yield('main')
    </div>
    <div id='footer' class="fixed-bottom">
        <p>&copy; 2020 nurulhidayah.app</p>
    </div>
    {{--Start Javascript--}}
    <script src="{{asset('js/jquery_3_4_1.min.js')}}"></script>
    <script src="{{asset('bootstrap_4_0_0/js/bootstrap.min.js')}}"></script>
    {{--End Javascript--}}
</body>

</html>