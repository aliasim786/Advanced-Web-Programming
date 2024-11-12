<x-layout title="Ali's Music App">
    <h1 class="page-title">My Songs</h1>
    
    <div class="song-container">
        @foreach ($music as $song)
            <div class="song-item">
                <a href="/music/{{$song->id}}" class="song-link">
                    {{$song->title}}
                </a>
            </div>
        @endforeach
    </div>

    <div class="pagination-container">
    @if ($music->hasPages())
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($music->onFirstPage())
                <span class="disabled">« Previous</span>
            @else
                <a href="{{ $music->previousPageUrl() }}" rel="prev">« Previous</a>
            @endif

            {{-- Pagination Links --}}
            @foreach ($music->links()->elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <a href="{{ $url }}" class="{{ $page == $music->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($music->hasMorePages())
                <a href="{{ $music->nextPageUrl() }}" rel="next">Next »</a>
            @else
                <span class="disabled">Next »</span>
            @endif
        </div>
    @endif
</div>

</x-layout>
