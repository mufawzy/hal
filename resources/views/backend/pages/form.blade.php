<div class="form-group">
    <div class="row">
        @php    $field = 'name';    @endphp
        <div class="col-md-3">
            {!! Form::label($field, ucfirst($field), ['class'=>'form-label']) !!}
        </div>
        <div class="col-md-9">
            {!! Form::text($field, isset($row) ? $row->$field : null, ['id'=>$field, 'class'=>'form-control', 'placeholder'=>ucfirst($field)]) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        @php    $field = 'description';    @endphp
        <div class="col-md-3">
            {!! Form::label($field, ucfirst($field), ['class'=>'form-label']) !!}
        </div>
        <div class="col-md-9">
            <div class="ql-wrapper ql-wrapper-demo bg-gray-100">
                <div id="quillEditor">{!! isset($row) ? $row->$field : null !!}</div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        @php    $field = 'image';    @endphp
        <div class="col-md-3">
            {!! Form::label($field, ucfirst($field), ['class'=>'form-label']) !!}
        </div>
        <div class="col-md-9 ">
            {!! Form::file($field, ['id'=>$field, 'class'=>'dropify', 'data-default-file'=> isset($row) ? asset(imagePath('no-image.png',$row->$field)) : null, 'data-height'=>'200']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        @php    $field = 'mata_key';    @endphp
        <div class="col-md-3">
            {!! Form::label($field, ucfirst($field), ['class'=>'form-label']) !!}
        </div>
        <div class="col-md-9">
            {!! Form::textarea($field, isset($row) ? $row->$field : null, ['id'=>$field, 'rows'=>3, 'class'=>'form-control', 'placeholder'=>ucfirst($field)]) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        @php    $field = 'mata_description';    @endphp
        <div class="col-md-3">
            {!! Form::label($field, ucfirst($field), ['class'=>'form-label']) !!}
        </div>
        <div class="col-md-9">
            {!! Form::textarea($field, isset($row) ? $row->$field : null, ['id'=>$field, 'rows'=>3, 'class'=>'form-control', 'placeholder'=>ucfirst($field)]) !!}
        </div>
    </div>
</div>