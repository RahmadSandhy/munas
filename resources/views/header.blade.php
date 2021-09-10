<!DOCTYPE html>
<html>
    <head>
        <!-- Styles -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>MUNAS</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 30%;
            }
            .content-wrapper {
                min-height: auto !important;
            }
        </style>
    </head>
    <body>
        <div class="wrapper" style="margin-top: 30px">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </body>
</html>

