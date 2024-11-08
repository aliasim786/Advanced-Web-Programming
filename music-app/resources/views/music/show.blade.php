<x-layout title="Show the details of a song">
    <div class="song-details-container">
        <h1 class="song-title">{{$music->title}}</h1>
        <p class="song-artist"><strong>Artist:</strong> {{$music->Artist}}</p>
        <p class="song-duration"><strong>Duration:</strong> {{$music->duration}} minutes</p>

        <div class="button-group">
            <a href='/music/{{$music->id}}/edit' class="edit-btn">
                <button>Edit</button>
            </a>

            <form method='POST' action='/music' class="delete-form">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$music->id}}">
                <button type='submit' class="delete-btn">Delete</button>
            </form>
        </div>
    </div>
</x-layout>
