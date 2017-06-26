<div class="row" style="margin-bottom: 9px;">

    <div class="box-body">
        <table class="table table-bordered" id="feature">
            <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th> <button class="btn btn-primary render-html" data-table="feature"><i class="fa fa-plus"></i> </button></th>
                </tr>

                @if( isset( $data['service_features'] ) )

                    @foreach($data['service_features'] as $service_feature)
                    <tr id="feature-{{ $service_feature->id }}">
                        <td></td>
                        <td>
                            {!! Form::hidden('feature_id[]', $service_feature->id) !!}
                            {!! Form::text('feature_title[]', isset($service_feature->title)?$service_feature->title:null, [ 'id' => 'feature_title', 'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}
                        </td>
                        <td><button data-id="{{ $service_feature->id }}" data-table="feature"  class="btn btn-danger remove-row"><i class="fa fa-remove"></i> </button></td>
                    </tr>
                    @endforeach

                @else

                    <tr>
                        <td></td>
                        <td> {!! Form::text('feature_title[]', null, [ 'id' => 'feature_title', 'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}</td>
                        <td></td>
                    </tr>

                @endif

            </tbody>
        </table>
    </div>

</div>