@if($status == "EN REVISION")
    <form method="POST" action="{{route('fondo3.aprobarCFDI', $id)}}">
        @csrf
        @method('PUT')
        <button class='btn-sm btn-success'><i class="far fa-check-circle"></i></button>
    </form> 
@else
    <small class="badge badge-danger"><i class="fas fa-times"></i> SIN</small>
@endif