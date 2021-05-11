@if ($status == "PENDIENTE")
    <small class="badge badge-warning"><i class="fas fa-hourglass-end"></i> PENDIENTE</small>
@elseif ($status == "EN REVISION")
    <small class="badge badge-info"><i class="far fa-clock"></i> EN REVISION</small>
@elseif ($status == "RECHAZADO")
    <small class="badge badge-danger"><i class="fas fa-times"></i> RECHAZADO</small>
@else
    <small class="badge badge-success"><i class="far fa-thumbs-up"></i> APROBADO</small>
@endif