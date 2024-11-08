<x-layout title="Add a new song">
<h1 class="page-title">Add a new song</h1>
<div class="add-song-container">

        <form method="POST" action="/music" class="song-form">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" name="title" class="form-input" />
            </div>

            <div class="form-group">
                <label for="Artist" class="form-label">Artist:</label>
                <input type="text" id="Artist" name="Artist" class="form-input" />
            </div>

            <div class="form-group">
                <label for="duration" class="form-label">Duration:</label>
                <select id="duration" name="duration" class="form-select">
                    <!-- Generate options for durations from 1 minute to 10 minutes -->
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }} min</option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Save the song</button>
            </div>
        </form>
    </div>
</x-layout>

