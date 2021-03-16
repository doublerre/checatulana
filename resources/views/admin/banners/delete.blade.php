<form method="POST" action="{{route('banners.destroy', $id)}}">
    @csrf
    @method('DELETE')
    <button class='confirmDelete btn-sm btn-danger'><i class="fas fa-trash"></i> Eliminar.</button>
</form>