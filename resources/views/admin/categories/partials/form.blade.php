<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('image') }}
</div>

<div class="form-group">
    {{ Form::hidden('logo_id', null, ['id' => 'logo_id']) }}
</div>

<div id="myDropdown" class="form-group">
    <div class="col-sm">
          <!-- select -->
        <div class="form-group">
            <label>Select</label>
            <select name="logo_id" class="form-control">
                @foreach ($logos as $logo)
                    <option value="{{$logo->id}}" data-imagesrc="{{Storage::url($logo->file)}}">Opción {{$loop->index + 1}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
<div>
    @foreach ($errors->all() as $error)
	    {{ $error }}		
	@endforeach
		
</div>
@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

        $('#myDropdown').ddslick({
            imagePosition:"right",
            selectText: "Selecciona un icono",
            width: 'responsive',
            onSelected: function(selectedData){
                $("#logo_id").val(selectedData.selectedData.value);
            } 
        });
	});
</script>

@stop