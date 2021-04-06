<form method="POST" action="{{route('admin.change_role', $id)}}">
    @csrf
    @method('PUT')
    <button class='btn-sm btn-warning'><i class='fas fa-exchange-alt'></i> Cambiar Rol.</button>
</form>