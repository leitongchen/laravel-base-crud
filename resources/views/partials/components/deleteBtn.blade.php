<form action="{{ route('comics.destroy', $id) }}" method="post">
    @csrf

    @method("DELETE")

    <input type="submit" value="Delete">

</form>