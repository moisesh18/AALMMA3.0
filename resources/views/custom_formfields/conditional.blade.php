<br>
<?php $checked = false; ?>
@if(isset($dataTypeContent->{$row->field}) || old($row->field))
    <?php $checked = old($row->field, $dataTypeContent->{$row->field}); ?>
@else
    <?php $checked = isset($options->checked) &&
        filter_var($options->checked, FILTER_VALIDATE_BOOLEAN) ? true: false; ?>
@endif

<?php $class = $options->class ?? "toggleswitch"; ?>

@if(isset($options->on) && isset($options->off))
    <input type="checkbox" class="{{ $class }}" data-on="{{ $options->on }}" data-off="{{ $options->off }}"
        @if($checked) checked @endif>
    <div class="form-group hidden custom-form-conditional">
        <span class="small text-center d-block">{{ isset($options->texto)? old($row->field, $options->texto): 'Año de diagnostico' }}</span>
        <input @if($row->required == 1) required @endif type="text" class="form-control" name="{{$dataType->slug}}[{{ $row->field }}]"
       {!! isBreadSlugAutoGenerator($options) !!}
       value="{{ $dataTypeContent->{$row->field} ?? old($row->field) ?? $options->default ?? '' }}">
    </div>
@else
    <div class="custom-form-conditional">
        <input type="checkbox" data-onstyle="success" class="{{ $class }}" @if($checked) checked @endif>

        <span class="small text-center conditional hidden">{{ isset($options->texto)? old($row->field, $options->texto): 'Año de diagnostico' }}</span>

        <div class="form-group conditional hidden text">
            <input @if($row->required == 1) required @endif type="text" class="form-control" name="{{$dataType->slug}}[{{ $row->field }}]" placeholder="{{ isset($options->texto)? old($row->field, $options->texto): 'Año de diagnostico' }}" {!! isBreadSlugAutoGenerator($options) !!} value="{{ $dataTypeContent->{$row->field} ?? old($row->field) ?? $options->default ?? '' }}">
        </div>
    </div>
@endif

