<nav class="custom-pagination">
    <ul class="custom-pagination-list">
        @if ($paginator->onFirstPage())
            <li class="custom-page-item disabled">
                <span class="custom-page-link">Previous</span>
            </li>
        @else
            <li class="custom-page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="custom-page-link" rel="prev">Previous</a>
            </li>
        @endif

        @foreach ($paginator->elements() as $element)
            @if (is_string($element))
                <li class="custom-page-item disabled">
                    <span class="custom-page-link">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="custom-page-item active">
                            <span class="custom-page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="custom-page-item">
                            <a href="{{ $url }}" class="custom-page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="custom-page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="custom-page-link" rel="next">Next</a>
            </li>
        @else
            <li class="custom-page-item disabled">
                <span class="custom-page-link">Next</span>
            </li>
        @endif
    </ul>
</nav>

<style>
.custom-pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.custom-pagination-list {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.custom-page-item {
    margin: 0 5px;
}

.custom-page-link {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-decoration: none;
    color: #333;
    background-color: #fff;
    cursor: pointer;
}

.custom-page-link:hover {
    background-color: #f0f0f0;
}

.custom-page-item.active .custom-page-link {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.custom-page-item.disabled .custom-page-link {
    color: #6c757d;
    background-color: #e9ecef;
    border-color: #ddd;
    cursor: not-allowed;
}
</style>
