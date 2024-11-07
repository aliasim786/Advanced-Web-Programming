<x-layout title="List the songs">
    <h1>My Playlist:</h1>
    @foreach ($music as $music)
    <p>
        <a href="/music/{{$music->id}}">
            {{$music->title}}
        </a>
    </p>
    @endforeach
</x-layout>