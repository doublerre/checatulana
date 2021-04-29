@if ($role == "EDITOR")
    <small class="badge badge-primary"><i class="fas fa-user-edit"></i> EDITOR</small>
@elseif($role == "MUNICIPIO")
    <small class="badge badge-secundary"><i class="fas fa-user-tie"></i> MUNICIPIO</small>
@else
    <small class="badge badge-success"><i class="fas fa-user-shield"></i> ADMINISTRADOR</small>
@endif