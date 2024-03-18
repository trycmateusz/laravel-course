@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
    <div class="laravel-pagination__buttons">
        @if ($paginator->onFirstPage())
        <span>
            {!! __('pagination.previous') !!}
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}">
            {!! __('pagination.previous') !!}
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">
            {!! __('pagination.next') !!}
        </a>
        @else
        <span>
            {!! __('pagination.next') !!}
        </span>
        @endif
    </div>

    <div>
        <div>
            <p>
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                <span>{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span>{{ $paginator->lastItem() }}</span>
                @else
                {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span>{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        <div>
            <span class="laravel-pagination__pages">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span class="laravel-pagination__pages-previous-next" aria-disabled="true"
                    aria-label="{{ __('pagination.previous') }}">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
                @else
                <a class="laravel-pagination__pages-previous-next" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="{{ __('pagination.previous') }}">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span>{{ $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <span aria-current="page" class="laravel-pagination__pages-page">
                    {{ $page }}
                </span>
                @else
                <a href="{{ $url }}" class="laravel-pagination__pages-page"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a class="laravel-pagination__pages-previous-next" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="{{ __('pagination.next') }}">
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                @else
                <span class="laravel-pagination__pages-previous-next" aria-disabled="true"
                    aria-label="{{ __('pagination.next') }}">
                    <span aria-hidden="true">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
                @endif
            </span>
        </div>
    </div>
</nav>
@endif