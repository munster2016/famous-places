<h1>
    you choose place with photos by place's id :
</h1>

        <p> your choose place            :{{$place->name}}<br></p>
        <p>with type                     :{{$place->type}}<br></p>

        <p>This place has next photos :<br></p>


{{--<img  src="https://www.stylewe.com/image_cache/resize/335x445/image/catalog/product/2020-01-15/7-jpg-1579069751707.jpeg" class="wwwww" alt="image" width="150px" height="150px">--}}
@foreach($photos as $photo)

<img  src="/storage/{{$photo->name}}" class="wwwww" alt="image" width="150px" height="150px">

@endforeach

<button><a href="{{route('photoToPlace', $place->id)}}">add photos to this place</a></button>



<button><a href="{{route('home')}}">go to start page</a></button>
