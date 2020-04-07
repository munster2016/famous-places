<h1>
    our favorite places:
</h1>
@isset($places)
    <ul>
    @foreach($places as $place)

    <li>
        <p>
            {{$place->name}}<br>type :{{$place->type}}
        </p>
        <button><a href="{{route('place_with photo', $place->id)}} ">show photos for this places</a></button>
    </li>
    @endforeach
    </ul>
@endisset

<button><a href="places/create">add favorite place...</a></button>

<button><a href="/photos/add">send a photo without your favorite place</a></button>


<button><a href="{{route('home')}}">go to start page</a></button>
