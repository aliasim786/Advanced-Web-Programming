<x-layout title="Add a new song">
  <h1>Add a new song</h1>

  <form method="POST" action="/music">
    @csrf
    <div>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" />
    </div>
    <div>
      <label for="Artist">Artist:</label>
      <input type="text" id="Artist" name="Artist" />
    </div>
    <div>
      <label for="duration">Duration:</label>
      <input type="text" id="duration" name="duration" />
    </div>
    <div>
      <button type="submit">Save the song</button>
    </div>
  </form>
</x-layout>