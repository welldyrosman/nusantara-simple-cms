@if ($paginator->hasPages())
<nav aria-label="...">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        </li>
        @endif
        <!-- @foreach ($elements as $element)
        @if (is_string($element))
        <li><span class="pagination-ellipsis"><span>{{ $element }}</span></span></li>
        @endif
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page === $paginator->currentPage())
        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach -->
        @if ($paginator->hasMorePages())
        <li class="page-item ">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link" disabled>Next</span>
        </li>
        @endif

    </ul>
</nav>
@endif
