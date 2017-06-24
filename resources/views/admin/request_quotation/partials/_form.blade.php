<div class="row">
    <div class="col-lg-12">
       {!! Form::label('full_name', 'Full Name' ) !!}

       {!! Form::text('full_name', null, [ 'id' => 'full_name', 'placeholder' => 'Full Name' , 'class' => 'form-control','disabled' ]) !!}
    </div>
</div>
<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('service_id', 'Service' ) !!}

        {!! Form::select('service_id', $data['services'], null, [ 'id' => 'service_id', 'placeholder' => 'Service' , 'class' => 'form-control','disabled' ]) !!}
    </div>
</div>
<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('quantity', 'Quantity' ) !!}

        {!! Form::text('quantity', null, [ 'id' => 'quantity', 'placeholder' => 'Quantity' , 'class' => 'form-control','disabled' ]) !!}
    </div>
</div>
<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('email', 'Email' ) !!}

        {!! Form::text('email', null, [ 'id' => 'email', 'placeholder' => 'Email' , 'class' => 'form-control','disabled' ]) !!}
    </div>
</div>

<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('phone_number', 'Phone Number' ) !!}

        {!! Form::text('phone_number', null, [ 'id' => 'phone_number', 'placeholder' => 'Phone Number' , 'class' => 'form-control' ,'disabled']) !!}
    </div>

</div>

<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('address', 'Address' ) !!}

        {!! Form::text('address', null, [ 'id' => 'address', 'placeholder' => 'Address' , 'class' => 'form-control','disabled' ]) !!}
    </div>

</div>

<div class="row" style="margin-top:9px;">
    <div class="col-lg-12">
        {!! Form::label('detail', 'Detail' ) !!}

        {!! Form::textarea('detail', null, [ 'id' => 'detail', 'placeholder' => 'Detail' , 'class' => 'form-control','disabled' ]) !!}
    </div>

</div>