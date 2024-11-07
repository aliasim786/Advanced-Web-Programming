<x-layout title="Show the details of a song">
    <h1>{{$music->title}}</h1>
    <p>Artist:{{$music->Artist}}</p>
    <p>Duration:{{$music->duration}}</p>

    <a href='/music/{{$music->id}}/edit'>
        <button>Edit</button>
    </a>

    <form method='POST' action='/music'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$music->id}}">
        <button type='submit'>Delete</button>
    </form>
</x-layout>