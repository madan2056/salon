<div class="col-lg-8">
    {!! Form::label('title1', 'Service' ) !!}

    {!! Form::select('title1', $response['service'], null, [ 'id' => 'title1','placeholder' => 'Service Title' , 'class' => 'form-control' ]) !!}
</div>