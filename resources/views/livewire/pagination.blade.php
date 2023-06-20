<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center">
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-gray-700 bg-gray-300 rounded-md cursor-not-allowed pagination-btn-disabled">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 text-white bg-blue-500 rounded-md pagination-btn hover:bg-blue-600">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 ml-2 text-white bg-blue-500 rounded-md pagination-btn hover:bg-blue-600">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="px-4 py-2 ml-2 text-gray-700 bg-gray-300 rounded-md cursor-not-allowed pagination-btn-disabled">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </nav>
    @endif
</div>
