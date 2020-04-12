

@extends('layouts.master')

@section('title', 'your favorite places')

@section('name_of_page', 'your favorite places')

@section('link', 'all places')

@section('content')


@isset($places)

    @foreach($places as $place)


        <div style="border: 1px solid red;width:700px; margin: 10px auto">
            <p style="font-size: 17px;color: blue">{{$place->name}}</p><br>
            type :{{$place->type}}

            <button><a href="{{route('place_with photo', $place->id)}} ">show photos</a></button>
            <button><a href="{{route('photoToPlace', $place->id)}} ">add photo</a></button>
            <a href="place/{{$place->id}}/addLike"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHwAAAB8CAMAAACcwCSMAAAAYFBMVEX///8AAADHx8f7+/vp6elCQkLQ0NA1NTXT09MgICC/v7/4+PgoKCgXFxdNTU1ra2ubm5vb29vw8PCmpqa3t7eVlZWLi4t0dHRmZmYLCwtgYGAtLS1TU1M9PT17e3usrKxyG0fyAAAEA0lEQVRoge2b27aiMAyGKQfZiALlqAjy/m85StJyqrpFTNbMmv9O1HzQhrRJwLL+WjkOC9bdJVUTeV7UVJ0MSdHp6SxGaouUEO6LuQoy9m7BFiKQRPC9AS7EnhMudoTwY27vdnZ30g5wJnE7gB/wU7j3kH6ih9+UIN3mgFsZwBsWuFUB/YcF7gb9sSsL3LpCoP3+SmOCSxj378c5Ezz0iMKcCW7FRAuMEV70B2seeN4f9HngsM4GPHBw9yMP3P0P/w//F+HGeEIF73pOxAMve07MA69MCxgRPGx7Ts4Cl8bNIhEcVu7DbLtGA8cN0zw9oYFjmjjPTmjgkBj686yQBA4zLsr5cQo4uvrZZYCHB2GKMCRwpwb2YVn9UvDwoT6t2mEyakrEAS6Cx7pEVbG+dBLidS+9bYC/1MqanXvB/xtrAL+FC5Esht+ZTdDSuq5BecZz/z1cRJNcVpanJpqqrqbz6l7VX9vFXdYr9J7xpjoOU59W5p80oxPMdLHVN7Nvp3c2mzFKLYny+PAnasnOA33Ie1Jilj9PtcvLwQ5cghuYsKh7ru8mo7P7tOhiR2go6r2ueTY6B2nXI/Qxf2X8tUq0lVjmCvJIk2GJH033W8KaXZDqRSq2ZyoW53Hcqt5S6kuHGyRe/iSfsZON0LeQAszAssCyqYI1vnMO2WZoS0/1D8JNkzn0MuoN/GwsvPTuJdyrk03cbCKY9etL+Feq2LBMNDxw2Iv5PHBcATmH/cIDLzC4sMCvGLY44A4sZjkLPA3QNAccnP2W9HDAdYGaAw4ressDv2JoZ4FD4pOxwFNPWWaAo7NLFjg4+72uwgCH3eG9dMsAh33MiQcOkb3ggbfaMD3chZqSZIFjZHdZ4LCHikIWODxa0ido9HCI7CUPHPL9nAXunLWz08OxcpyywMHZ/ZAFnunIzgC/Ds5OD4fInvHAxcgsNTwdOTs5HItBFgscnD3igataEAv8NHJ2angIrZI9Dxx4kgUux85ODYeEQT07RgwHZ1eP7BHDoZekyue08FDVoTjg2E1SbTVaODh7oHC0cLu32aqPj+HfeIoWiq66EfwYrss2G2qUMDyH64LVdsIEVY9m8HBws0kk3ETdJLKrJa419LawHdBtCL9Mp1ydzKGOlXQfC8bost07GtilHNwoXXa9K/wKx32zWcft23F0NcumqQpAmNIZH89YIRutTx6xiRdw5X44JSLe4GUBR7WuA/NhrZk33r3uw4mXhe7Cz1/4sKcN/KFfrB9OEZe4s3frtE/idjBuCFpynyhl47tOLh3iM7312sHG9DeDRhq9Nvlb+e+/aNI9e5zkHfSqWJlmn199W9lr71dHZnEUeasUNXWZy49jtLNKn1K/pT8GEDPLnrTOkAAAAABJRU5ErkJggg=="
                            alt="" width="30px" height="35px" title="like">
            </a>
            @foreach($replics as $replic)
                @if($replic->place_id == $place->id)
                    <span style="color: green">{{$replic->liki}}</span>
                @endif

            @endforeach
            <a href="place/{{$place->id}}/addDislike"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAB6CAMAAABHh7fWAAAAY1BMVEX///8AAAABAALw8PDi4uK2trZfX18ODg6Pj497e3uysrMxMTFmZmbe3t6jo6Opqanq6ur4+PjY2NhYWFgWFhbPz890dHTJyck8PDy8vLxOTk42NjaGhoYiIiKdnZ0rKytGRkY0e/wlAAAEOUlEQVRoge2a6ZarKhCFg0M0ZlCcTdQ+7/+UVwrtdkADWJJ118r+2R3zBSiqio2n01dfffV/UZGQt8rjI8j1ezBTiE8OCbEkRIhg3NSOi8pVVBXb/dMlgS9+o+4jlzm4upRyE7ZQErDnY/ja97JIMwW3/U/SUPdc4w7on+y+Iafw2IfG4Hujif2lP7MK0Fd7Mx4chrZGfyj6AWtO+PCkpY6Of8Gv5KyscoBb6mj65I+mdbz9nFh28fxbLUV0yEMziTS4XG46wBXRVxh0og3uZOf9YquhC3ikoXvQ3R7xL3W3cGroBwwaI7H6qugboHcOWg/9giBDIKujfz6H5gXnI+jkc2Hm81yG0Lcoo4s+Bfu74cpo2vSlZ9E8HI6uWeNAiF7t2IXOgNw4e7kaaMgo6e4Ra6ALSCh3DLIqOhd2pybQ1GMrnX0C7UADq9+f7EDDUr9QgkwVXUF8Y+wsBTSvVQVkssAsmo86AnSKs9hqo6Yvzi5Movt9/egPHiXCBlNEB7xsNSXCnKvua0ikNcpiq6GfQEZZaUV0hUlWQ8OgfSSyEjqGNgEpjaqhWXiTGxZZCZ2jzrcS+vw5NDtkkvNH0DXsLaQeRQ1dQRb9wfJqVdBOCmyvNVs0IaXkg91mHG2X3FG9VMbR3KvLsdLZTR7NvboWCVwx304WnSLmUTDtpC27ArF4FOlgz267YBFvC320QdN6sPFJer5t6Wx1w02Zf0OIi0COxtbwe/O8G25KcDoUmER5MSZSc0TTPi/JkrsjdYMz4Qlvam+StxVpe+JeHXnuJbdA9u6nqAoklFH+EPu1O496/IrJUyx+GZ+pdo8fTXkVUK4Bw03g+fJO+Vo7AblBo8fK5G+3Vgo6v7zQuTZ5SO6ILv8IRa/6pptLpPbjWrq9wKA1i31Uv95nPos8hA/z6c71yJ3suHqMFY4VBC5ZT7cw3SgXNmL1CUMgH34VTm8lUkzWinCkHd2SCtn3/xP9h7sCSEajSP6afRvAdIvjD0dwLBPkebuB4nNcjEHSEJ7KkI9rAtlsWr2lhxqL3/LA1J0RymWmhFqPZ4WIFIg3kAuDPuCNnpFqcaqEw8P1UDJ3WxY7qN3IrliClzcWcUwJSle3LRu61nmA8/vAQ94b+5MDbyvNAtkmuHabWJkoZfmIt3LrCgQBbh+fTdbQ8DcL6ZJoXTDhyXTCV7Y6tkRhVuO6m2uK0uXm8s2gKZSJ6WkU0PXhaNHCtkYCvL8cmRbNh5kw463CNImHhtC8J5isbGgijTLByr4+go4WpRn5rmZD5XxpK2PocG5nmkPT+SmjwL2r2RK0Z6NrgswcOptZBwbRp3/Tw2Z88Nl2LP729bC/7MQguvfXkjBznKLm5srxRZPLndhr1uGnrZHoefL6+aEGylz27c9eY3yMqwNpVddfH827HeifCJW1iUfI61KZBn/11Vfy+g82lDcVESGZaQAAAABJRU5ErkJggg=="
                             alt="" width="30px" height="35px" title="don't like">
            </a>
            @foreach($replics as $replic)
                @if($replic->place_id == $place->id)
                    <span style="color: red">{{$replic->dislike}}</span>
                @endif

            @endforeach


        </div>

    @endforeach
@endisset

<button><a href="places/create">add favorite place...</a></button>

<button><a href="/photos/add">add photo without favorite place</a></button>


<button><a href="{{route('home')}}">go to start page</a></button>

@endsection
