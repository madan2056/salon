<div class="row" style="margin-bottom: 9px;">
    <div class="col-lg-8">
        {!! Form::label('parent_id', 'Parent Page' ) !!}

        {!! Form::select('parent_id', $data['page'], null, [ 'id' => 'parent_id','placeholder' => 'Parent Page' , 'class' => 'form-control' ]) !!}
    </div>


</div>
<div class="row" style="margin-bottom: 9px;">

    <div class="col-lg-8">
        {!! Form::label('page_type', 'Page Type' ) !!}

        {!! Form::select('page_type', $data['page_type'], null, [ 'id' => 'page_type', 'class' => 'form-control' ]) !!}
    </div>
</div>

<div class="row" id="title" style="margin-bottom: 9px;">

    @if(old('page_type') == 'service' || isset($data['row']) && $data['row']->page_type == 'service')

        @include('admin.page.partials._service')

    @else

        @include('admin.page.partials._title')

    @endif
</div>

<div class="row" style="margin-bottom: 9px;">
    <div class="col-lg-2">
        {!! Form::label('show_in_menu', 'Show In Menu' ) !!}

        <div class="control-group">
            <div class="radio">
                <label>
                    {!! Form::radio('show_in_menu', 1, false, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> Yes</span>
                </label>

                <label>
                    {!! Form::radio('show_in_menu', 0, true, [ 'class' => 'ace' ]) !!}
                    <span class="lbl"> No</span>
                </label>
            </div>
        </div>

    </div>
    <div class="col-lg-2">
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
    <div class="col-lg-4">
        {!! Form::label('image', 'Image') !!}

        {!! Form::file('image', ['id' => 'file', 'class' => 'form-control']) !!}
    </div>

    <div id="uploadForm"></div>

    @if(isset($data['row']->image))

        @if($data['row']->image)

            <img src="{{ asset('images/page/'.$data['row']->image) }}" alt="{{ $data['row']->image }}" style="max-width:200px; max-height:150px;">

            <a href="{{ route('admin.page.deleteimg', [ 'id' => $data['row']->id ]) }}" class="delete-image-confirm">
                <span class="label label-danger ">Delete Image</span>
            </a>

        @else
            <p>No Image</p>

        @endif

    @endif
</div>

<div class="form-group" >
    {!! Form::label('short_description', 'Short Description' ) !!}

    {!! Form::textarea('short_description', null, [ 'id' => 'short_description', 'rows'=>'8', 'placeholder' => 'Short Description' , 'class' => 'form-control text-editor' ]) !!}
</div>

<div class="form-group" >
    {!! Form::label('description', 'Long Description' ) !!}

    {!! Form::textarea('description', null, [ 'id' => 'description', 'rows'=>'15', 'placeholder' => 'Long Description' , 'class' => 'form-control' ]) !!}
</div>
