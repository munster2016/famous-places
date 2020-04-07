
<h2>add your new place :</h2>
<form action="{{route('saveOnePlace')}}" method="post">
    @csrf
    <p>add your new place :<input type="text" name="name"></p>
    <label for="place">Choose a type :</label>
    <select name="type" id="place">
        <option value="sport">Sport</option>
        <option value="history">History</option>
        <option value="food">Food</option>
    </select>
    <br>
    <input type="submit" value="save">
</form>



<button><a href="{{route('home')}}">go to start page</a></button>
