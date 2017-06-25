<div class="row">
    <div class="col-lg-4">
        {!! Form::label('status', 'Status' ) !!}
        <div class="control-group">
            <div class="radio">
                <label>
                    {!! Form::radio('status', 1, true, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> Active  </span>
                </label>

                <label>
                    {!! Form::radio('status', 0, false, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> Inactive</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top:9px;">
    <div class="col-lg-10">
        {!! Form::label('rank', 'Rank' ) !!}

        {!! Form::number('rank', isset($data['last_order'])?$data['last_order']:null, [ 'id' => 'rank', 'placeholder' => 'Rank' , 'class' => 'form-control' ]) !!}
        <i class="help-block">Make gap of 10 in ordering.</i>

        {!! Form::label('type', 'Type' ) !!} <br>
        {{ Form::radio('type', 'happy_customer', null, ['class' => 'customer']) }}Happy Customer
        {{ Form::radio('type', 'testimonials', null, ['class' => 'testimonials']) }}Testimonials
        <br><br>
        <div class="customerPart">
            {!! Form::label('video_title', 'Video Title' ) !!}
            {!! Form::text('video_title', null, [ 'placeholder' => 'Video Title' , 'class' => 'form-control']) !!}
            <br>
            {!! Form::label('video_url', 'Video Url' ) !!}
            {!! Form::text('video_url', null, [ 'placeholder' => 'Video Url' , 'class' => 'form-control']) !!}
        </div>

        <div class="testimonialsPart">
            {!! Form::label('customer_name', 'Customer Name' ) !!}
            {!! Form::text('customer_name', null, [ 'placeholder' => 'Customer Name ' , 'class' => 'form-control']) !!}

            {!! Form::label('customer_address', 'Customer Address' ) !!}
            {!! Form::text('customer_address', null, [ 'placeholder' => 'Customer Address' , 'class' => 'form-control']) !!}

            {!! Form::label('customer_comment', 'Customer Comment' ) !!}

            {!! Form::textarea('customer_comment', null, [ 'id' => 'customer_comment', 'rows'=>'15', 'placeholder' => 'Customer Comment' , 'class' => 'form-control' ]) !!}

                {!! Form::label('image', 'Image') !!}

                {!! Form::file('image', ['id' => 'file', 'class' => 'form-control']) !!}
                <i class="help-block"><strong>NOTE:</strong> Best image dimension is 1200 px * 600 px</i>
        </div>

    </div>


</div>