<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 35px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .links > a :hover {
            color: blue;
            text-decoration: underline;
        }


        .links{
            text-align: center;
            margin: auto;
        }

        .m-b-md {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="title m-b-md">
    @yield('name_of_page')
</div>
<div class="links" style="background-color: gainsboro; height: 99px;line-height: 99px">

            <a href="{{ route('home') }}">all places</a>
            <a href="{{ route('create_new_place') }}">create new place</a>
            <a href="{{ route('photoToPlace', 1) }}">add new photo to place</a>
            <a href="{{ route('photo_add') }}">add new photo to collection</a>
           <a href="{{ route('all_photos') }}">all photos</a>

</div>
<h1 style="text-align: center">@yield('link')</h1>
<div class="content">
@yield('content')


</div>
<div style="height: 150px;background-color: gainsboro">
    <h2 style="text-align: center;">Footer</h2>
</div>
</body>
</html>

