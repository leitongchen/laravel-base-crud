<form class="delete-btn" action="{{ route('comics.destroy', $id) }}" method="post">
    @csrf

    @method("DELETE")

    <input type="submit" value="Delete">

</form>