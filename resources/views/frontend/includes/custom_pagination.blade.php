@if ($paginator->hasPages())
    <div class="customPagination">
        <ul class="clearfix">

        @foreach ($elements as $element)
            @if (is_string($element))
                    <li class="active"><a href="#">{{ $element }}</a></li>
            @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
        @endforeach


    </ul>
</div>
@endif