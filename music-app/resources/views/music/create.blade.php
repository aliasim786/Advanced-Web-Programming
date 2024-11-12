 <x-layout title="Add a new song">
    <h1 class="page-title">Add a new song</h1>
    <div class="add-song-container">

        <form method="POST" action="/music" class="song-form">
            @csrf
            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" name="title" class="form-input" value="{{ old('title') }}" />
                <!-- Display specific error for title -->
                @error('title')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Artist" class="form-label">Artist:</label>
                <input type="text" id="Artist" name="Artist" class="form-input" value="{{ old('Artist') }}" />
                <!-- Display specific error for Artist -->
                @error('Artist')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="duration" class="form-label">Duration:</label>
                <select id="duration" name="duration" class="form-select">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ old('duration') == $i ? 'selected' : '' }}>{{ $i }} min</option>
                    @endfor
                </select>
                <!-- Display specific error for duration -->
                @error('duration')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Save the song</button>
            </div>
        </form>
    </div>
</x-layout>