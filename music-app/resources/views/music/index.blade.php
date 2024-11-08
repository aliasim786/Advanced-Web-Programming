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

    <!-- Pagination links -->
    <div class="pagination-container">
        {{ $music->links() }}
    </div>
</x-layout>
