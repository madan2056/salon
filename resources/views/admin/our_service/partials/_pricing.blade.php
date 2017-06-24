<div class="row" style="margin-bottom: 9px;">
    <div class="box-body">
        <table class="table table-bordered"  id="pricing">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Title</th>
                <th>Price</th>
                <th> <button class="btn btn-primary render-html"  data-table="pricing"><i class="fa fa-plus"></i> </button></th>
            </tr>

            @if( isset( $data['service_pricing'] ) )

                @foreach($data['service_pricing'] as $service_pricing)
                    <tr id="pricing-{{ $service_pricing->id }}">
                        <td></td>
                        <td> {!! Form::text('pricing_title[]', isset($service_pricing->title)?$service_pricing->title:null, [ 'id' => 'pricing_title', 'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}</td>
                        <td><button data-id="{{ $service_pricing->id }}" data-table="pricing" class="btn btn-danger remove-row"><i class="fa fa-remove"></i> </button></td>
                    </tr>
                @endforeach

            @else

                <tr>
                    <td></td>
                    <td> {!! Form::text('pricing_title[]', null, [ 'id' => 'pricing_title', 'placeholder' => 'Title' , 'class' => 'form-control' ]) !!}</td>
                    <td> {!! Form::text('price[]', null, [ 'id' => 'price', 'placeholder' => 'Price' , 'class' => 'form-control' ]) !!}</td>
                    <td><button class="btn btn-danger"><i class="fa fa-remove"></i> </button></td>
                </tr>

             @endif
            </tbody>
        </table>
    </div>

</div>
