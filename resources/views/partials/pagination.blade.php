@if ($paginator->hasPages())
    <div class="join grid grid-cols-2" style="display:flex; justify-content:center; margin-bottom: 2%;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="join-item btn btn-outline disabled" style="width: 200px;" aria-disabled="true">@lang('pagination.previous')</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" style="width: 200px;" class="join-item btn btn-outline" rel="prev">
                <span>@lang('pagination.previous')</span>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" style="width: 200px;" class="join-item btn btn-outline" rel="next">
                <span>@lang('pagination.next')</span>
            </a>
        @else
            <a class="join-item btn btn-outline disabled" style="width: 200px;" aria-disabled="true">
                <span>@lang('pagination.next')</span>
            </a>
        @endif
    </div>
@endif
