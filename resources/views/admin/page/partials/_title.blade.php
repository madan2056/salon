<div class="col-lg-8">
    {!! Form::label('title1', 'Title1' ) !!}

    {!! Form::text('title1', null, [ 'id' => 'title1', 'placeholder' => 'Title1' , 'class' => 'form-control',
    isset($data['row']) && ($data['row']->slug == 'about-us' || $data['row']->slug == 'what-is-and-why-cosmetic-tattoo')?'disabled':'']) !!}

    @if(isset($data['row']) && ($data['row']->slug == 'about-us' || $data['row']->slug == 'what-is-and-why-cosmetic-tattoo'))
        <input type="hidden" name="title1" value="{{ $data['row']->title1 }}">
        @endif

</div>