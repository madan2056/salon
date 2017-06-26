<div class="row" style="margin-bottom: 9px;">
    <div class="col-lg-8">
        {!! Form::label('title', 'Title' ) !!}

        {!! Form::text('title', null, [ 'id' => 'title', 'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}
    </div>
    <div class="col-lg-4">
        {!! Form::label('status', 'Status' ) !!}

        <div class="control-group">
            <div class="radio">
                <label>
                    {!! Form::radio('status', 1, true, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> Active</span>
                </label>

                <label>
                    {!! Form::radio('status', 0, false, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> Inactive</span>
                </label>
            </div>
        </div>

    </div>

</div>

<div class="row" style="margin-bottom: 9px;">
    <div class="col-lg-4">
        {!! Form::label('rank', 'Rank' ) !!}

        {!! Form::number('rank', isset($data['last_order'])?$data['last_order']:null, [ 'id' => 'rank', 'placeholder' => 'Rank' , 'class' => 'form-control' ]) !!}
        <i class="help-block">Make gap of 10 in ordering.</i>
    </div>
    <div class="col-lg-4">
        {!! Form::label('image', 'Image') !!}

        {!! Form::file('image', ['id' => 'file', 'class' => 'form-control']) !!}
        <span><strong>Best Dimension:</strong> 600px * 600px</span>
    </div>

    <div id="uploadForm"></div>

    @if(isset($data['row']->image))

        @if($data['row']->image)

            <img src="{{ asset('images/'.$scope.'/'.$data['row']->image) }}" alt="{{ $data['row']->image }}" style="max-width:200px; max-height:150px;">
            <a href="{{ route('admin.'.$scope.'.deleteimg', [ 'id' => $data['row']->id ]) }}" class="delete-image-confirm">
                <span class="label label-danger " >Delete Image</span>
            </a>
        @else
            <p>No Image</p>

        @endif

    @endif
</div>

<div class="form-group" >
    {!! Form::label('short_description', 'Short Description' ) !!}

    {!! Form::textarea('short_description', null, [ 'id' => 'short_description', 'placeholder' => 'Short Description' , 'class' => 'form-control' ]) !!}
</div>

<div class="form-group" >
    {!! Form::label('description', 'Long Description' ) !!}

    {!! Form::textarea('description', null, [ 'id' => 'description', 'rows'=>'15', 'placeholder' => 'Long Description' , 'class' => 'form-control' ]) !!}
</div>
