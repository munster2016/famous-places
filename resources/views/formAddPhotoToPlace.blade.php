<h3>

   Add new photo to place : {{$place->name}} or choose other place in drop list
</h3>

<form action="/savePhoto" method="post">
    @csrf
    <label for="places">Place :</label>
    <select name="name" id="places">
            @foreach($allPlaces as $item)
                @if($place->name === $item->name)
                <option value="{{$item->name}}" selected = "selected">{{$item->name}}</option>
            @else
                <option value="{{$item->name}}" >{{$item->name}}</option>
            @endif
            @endforeach

    </select>

    <input type="file" name="image">

    <input type="submit" value="send">
</form>

