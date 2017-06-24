<div class="form-group">
    {!! Form::label('name', 'User Name' ) !!}

    {!! Form::text('name', null, [ 'id' => 'name', 'placeholder' => 'User Name' , 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email' ) !!}

    {!! Form::email('email', null, [ 'id' => 'email', 'placeholder' => 'Email' , 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password' ) !!}

    {!! Form::password('password', [ 'id' => 'password', 'placeholder' => 'Password' , 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('password_confirmation', 'Confirmation Password' ) !!}

    {!! Form::password('password_confirmation', [ 'id' => 'password_confirmation', 'placeholder' => 'Confirm Password' , 'class' => 'form-control' ]) !!}
</div>

<div class="row" style="margin-top:9px;">
    <div class="col-lg-4" style="margin-top:15px;">
        {!! Form::label('image', 'Image') !!}

        {!! Form::file('image', ['id' => 'file', 'class' => 'form-control']) !!}
    </div>

    <div id="uploadForm"></div>

    @if(isset($data['row']->image))
        @if($data['row']->image)
            <img src="{{ asset('images/users/'.$data['row']->image) }}"
                 alt="{{ $data['row']->image }}" style="max-width:200px; max-height:150px;">
        @else
            <p>No Image</p>
        @endif
    @endif
</div>

<div class="form-group">
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
