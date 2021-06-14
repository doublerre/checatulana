@if($status == "EN REVISION")
    <button class='refuse btn-sm btn-danger' value='{{$id}}'><i class="fas fa-times"></i></button>
@else
    <small class="badge badge-danger">ACCIONES <i class="fas fa-times"></i></small>
@endif