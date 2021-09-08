<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>MUNAS</title>
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
        <div class="wrapper">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </body>
</html>

