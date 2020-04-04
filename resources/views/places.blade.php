<h1>
    My favorite places:
</h1>
@isset($places)
    <ul>
    @foreach($places as $place)

    <li><a href="/places/{{$place->id}}"> place :{{$place->name}}<br>type :{{$place->type}}
        </a>
    </li>
    @endforeach
    </ul>
@endisset

<button><a href="places/create">add favorite place...</a></button>
