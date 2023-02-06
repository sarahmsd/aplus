@if ($paginator->hasPages())
<div class="wrapper">
    <nav>
        <ul class="pager">
            @if ($paginator->onFirstPage())
                <li class="pager-item pager-item-prev disabled"><a class="pager-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                        <g fill="none" fill-rule="evenodd">
                        <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                        </g>
                    </svg></a>
                </li>
            @else
                <li class="pager-item pager-item-prev">
                    <a class="pager-link" href="{{ $paginator->previousPageUrl() }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                            <g fill="none" fill-rule="evenodd">
                            <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="pager-item disabled"><a class="pager-link" href="#">{{ $element }}</a></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pager-item active"><a class="pager-link">{{ $page }}</a></li>
                        @else
                            <li class="pager-item"><a class="pager-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())            
                <li class="pager-item pager-item-next">
                    <a class="pager-link" href="{{ $paginator->nextPageUrl() }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                            <g fill="none" fill-rule="evenodd">
                            <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            @else
                <li class="pager-item pager-item-next disabled">
                    <a class="pager-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                            <g fill="none" fill-rule="evenodd">
                            <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endif