@if ($file == "EN ESPERA...")
    <small class="badge badge-warning"><i class="fas fa-hourglass-end"></i> EN ESPERA...</small>
@else
    <a href="{{Storage::url($file)}}" target="_blank" class="btn btn-sm btn-default">Ver PDF.</a>
@endif