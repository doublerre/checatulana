<form method="POST" action="{{route('admin.destroy', $id)}}">
    @csrf
    @method('DELETE')
    <button class='confirmDelete btn-sm btn-danger'><i class='fas fa-user-minus'></i> Eliminar.</button>
</form>