<form method="POST" action="{{route('admin.change_status', $id)}}">
    @csrf
    @method('PUT')
    @if($activated == 0)
        <button class='btn-sm btn-success'><i class='fas fa-exchange-alt'></i> Activar.</button>
    @else
        <button class='btn-sm btn-danger'><i class='fas fa-exchange-alt'></i> Banear.</button>
    @endif
</form>