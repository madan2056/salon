<div class="row">
    <div class="col-lg-12">
       {!! Form::label('key', 'Key' ) !!}
    {!! Form::text('key', null, [ 'id' => 'key', 'placeholder' => 'Key' , 'class' => 'form-control ' ]) !!}
    </div>
</div>

<div class="form-group"  style="margin-top:9px;">
    {!! Form::label('value', 'Value' ) !!}
    {!! Form::textarea('value', null, [ 'id' => 'description', 'placeholder' => 'Value' ,
      'row' => '3' , 'class' => 'form-control' ]) !!}
</div>

<div class="form-group"  style="margin-top:9px;">
    {!! Form::label('status', 'Status' ) !!}
    <div class="control-group">
        <div class="radio">
            <label>
                {!! Form::radio('status', 1, true, [
                   'class' => 'ace'
               ]) !!}
                <span class="lbl"> Active  </span>
            </label>

            <label>
                {!! Form::radio('status', 0, false, [
                    'class' => 'ace'
                ]) !!}
                <span class="lbl"> Inactive</span>
            </label>
        </div>
    </div>
</div>
