
@if ($paginator->hasPages())

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-default disabled"><i class="fa fa-angle-left"></i></a>
        @else
          <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-default" rel="prev"><i class="fa fa-angle-left"></i></a>
        @endif


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-default" rel="next"><i class="fa fa-angle-right"></i></a>
        @else
            <a class="btn btn-default disabled" ><i class="fa fa-angle-right"></i></a>
        @endif

@endif
