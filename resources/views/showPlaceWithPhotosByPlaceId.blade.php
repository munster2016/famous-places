<h1>
    you choose place with photos by place's id :
</h1>

        <p> your choose place            :{{$place->name}}<br></p>
        <p>with type                     :{{$place->type}}<br></p>
{{--        @if($place->photos == null)--}}
{{--            <p></p>--}}
{{--            @endif--}}
        <p>with photos                   :kommt photos<br></p>

<button><a href="/places/{{$place->id}}/photos/add">add photos to this place</a></button>
