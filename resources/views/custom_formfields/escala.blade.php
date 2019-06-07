{{-- If this is a relationship and the method does not exist, show a warning message --}}
@if(isset($options->relationship) && !method_exists( $dataType->model_name, camel_case($row->field) ) )
    <p class="label label-warning"><i class="voyager-warning"></i> {{ __('voyager::form.field_select_dd_relationship', ['method' => camel_case($row->field).'()', 'class' => $dataType->model_name]) }}</p>
@endif
@php
$dataTypeContent->{$row->field} = json_decode($dataTypeContent->{$row->field})
@endphp
<select class="form-control select2" name="{{$dataType->slug}}[{{ $row->field }}][]" multiple>
    @foreach(json_decode(setting('centro-de-salud.escala')) as $key => $label)
            <?php $selected = ''; ?>
        @if(is_array($dataTypeContent->{$row->field}) && in_array($key, $dataTypeContent->{$row->field}))
            <?php $selected = 'selected="selected"'; ?>
        @elseif(!is_null(old($row->field)) && in_array($key, old($row->field)))
            <?php $selected = 'selected="selected"'; ?>
        @endif
        <option value="{{ $key }}" {!! $selected !!}>
            {{ $label }}
        </option>
    @endforeach
</select>
