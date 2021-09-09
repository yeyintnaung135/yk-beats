@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="gen-pagination">
                <nav aria-label="Page navigation">
                    <ul class='page-numbers'>
                        @if ($paginator->onFirstPage())
                            <li><a class="next page-numbers d-none">Previous page</a></li>
                        @else
                            <li><a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}">Previous page</a></li>

                        @endif



                        @foreach ($elements as $element)

                            @if (is_string($element))
                                <li class="disabled"><span>{{ $element }}</span></li>
                            @endif



                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                            <li><a aria-current="page"
                                                      class="active page-numbers current">{{$page}}</a></li>
                                    @else
                                            <li><a href="{{ $url }}" aria-current="page"
                                                      class=" page-numbers">{{$page}}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach



                        @if ($paginator->hasMorePages())
                                <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Next</a></li>

                        @else
                                <li><a class="next page-numbers d-none">Next</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif
