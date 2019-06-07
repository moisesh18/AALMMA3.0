<br>
<?php $checked = false; ?>
@if(isset($dataTypeContent->{$row->field}) || old($row->field))
    <?php $checked = old($row->field, $dataTypeContent->{$row->field}); ?>
@else
    <?php $checked = isset($options->checked) &&
        filter_var($options->checked, FILTER_VALIDATE_BOOLEAN) ? true: false; ?>
@endif

<?php $class = $options->class ?? "toggleswitch conditional"; ?>

@if(isset($options->on) && isset($options->off))
    <input type="checkbox" name="{{$dataType->slug}}[{{ $row->field }}]" class="{{ $class }}"
        data-on="{{ $options->on }}" {!! $checked ? 'checked="checked"' : '' !!}
        data-off="{{ $options->off }}">
@else
    <input type="checkbox" class="{{ $class }}"
        @if($checked) checked @endif>
    <div class="form-group hidden custom-form-conditional">
        <input @if($row->required == 1) required @endif type="text" class="form-control" name="{{$dataType->slug}}[{{ $row->field }}]"
        placeholder="{{ isset($options->texto)? old($row->field, $options->texto): 'Año de diagnostico' }}"
       {!! isBreadSlugAutoGenerator($options) !!}
       value="{{ $dataTypeContent->{$row->field} ?? old($row->field) ?? $options->default ?? '' }}">
    </div>
@endif

