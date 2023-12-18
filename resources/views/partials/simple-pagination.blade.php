@if ($paginator->hasPages())
    <div class="join grid grid-cols-2 mb-2 w-1/2 mx-auto">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="join-item btn btn-outline disabled w-full" aria-disabled="true">@lang('pagination.previous')</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline w-full" rel="prev">
                <span>@lang('pagination.previous')</span>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline w-full" rel="next">
                <span>@lang('pagination.next')</span>
            </a>
        @else
            <a class="join-item btn btn-outline disabled w-full" aria-disabled="true">
                <span>@lang('pagination.next')</span>
            </a>
        @endif
    </div>
@endif
