@php
    $dataTypeContent->{$row->field} = json_decode($dataTypeContent->{$row->field});
@endphp
<br>
@if (property_exists($options,"options"))
    <div class="border row">
        @foreach ($options->options as $option => $inputs)
            <div class="form-group col-md-3">
                <p class="small">{{strtoupper(str_replace("_"," ",$option))}}</p>
                @foreach ($inputs as $input)
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">{{strtoupper($input)}}</span>
                        </div>
                        <input type="date" class="form-control form-group datetime small" name="{{$dataType->slug}}[{{$row->field}}][{{$option}}][{{$input}}]" value="{{$dataTypeContent->{$row->field}->$option->$input ?? ""}}" aria-describedby="basic-addon3">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endif

