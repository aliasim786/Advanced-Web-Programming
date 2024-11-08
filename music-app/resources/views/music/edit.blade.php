<x-layout title="Edit a song">
<h1 class="page-title">Edit the details for {{$music->title}}</h1>
<div class="edit-song-container">
        <form action="/music" method="POST" class="edit-song-form">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$music->id}}">

            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" name="title" class="form-input" value="{{$music->title}}">
            </div>

            <div class="form-group">
                <label for="Artist" class="form-label">Artist:</label>
                <input type="text" id="Artist" name="Artist" class="form-input" value="{{$music->Artist}}">
            </div>

            <div class="form-group">
                <label for="duration" class="form-label">Duration:</label>
                <select id="duration" name="duration" class="form-select">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ $music->duration == $i ? 'selected' : '' }}>{{ $i }} min</option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Save Changes</button>
            </div>
        </form>
    </div>
</x-layout>
