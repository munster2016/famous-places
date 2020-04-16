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

            <a href="{{ route('home') }}">@lang('messages.create_new_place')</a>
            <a href="{{ route('create_new_place') }}">@lang('messages.add_new_photo_to_place')</a>
            <a href="{{ route('photoToPlace', 1) }}">@lang('messages.all_places')</a>
            <a href="{{ route('photo_add') }}">@lang('messages.add_new_photo_to _collection')</a>
            <a href="{{ route('photos.index') }}">@lang('messages.all_photos')</a>
            <a href="{{ route('locale', ['locale' => 'en']) }}" style="color: blue" >EN<img src="data:image/png;base64,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"
                                                  alt="" width="20px" height="20px"></a>
            <a href="{{ route('locale', ['locale' => 'de']) }}" style="color: blue">DE<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM8AAAB8CAMAAAD5ARS2AAAAG1BMVEX+zgDcAAABAQGgBwviAAHiXQwAAAP/0gsBBAFU9GZbAAAAw0lEQVR4nO3PQU7DMBRAQWPA9P4npgsUktIdSDxZM8riO5HtvDH3Mv77B/6YnjY9bXra9LTpadPTpqdNT5ueNj1tetr0tOlp09Omp01Pm542PW1jzbnW+bm7v3o6r2M41mtdP8/zWfP7lB9bLqdcLj/tnOvx8mPn1zwf5nHby1h7Ga97GW97GS970dOmp01Pm542PW162vS06WnT06anTU+bnjY9bXra9LTpadPTpqdNT9t438v42MsAAAAAAAAAAPilT/oQe7PczpYTAAAAAElFTkSuQmCC"
                                                   alt="" width="20px" height="20px"></a>

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

