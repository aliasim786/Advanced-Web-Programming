<x-layout title="Ali's music App">
    <h1>My Songs:</h1>
    @foreach ($music as $music)
    <p>
        <a href="/music/{{$music->id}}">
            {{$music->title}}
        </a>
    </p>
    @endforeach
</x-layout>