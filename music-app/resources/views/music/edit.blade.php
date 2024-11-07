<x-layout title="Edit a song">
    <h1>Edit the details for {{$music->title}}</h1>
    <form action="/music" method="POST">
    @csrf
    @method('PATCH')
    <!--A hidden field contains the id number of the film -->
    <input type="hidden" name="id" value="{{$music->id}}">
    <div>
        <label for="title">Title:</label>
        <!-- The text boxes are populated with values from the database ready for the user to edit -->
        <input type="text" id="title" name="title" value="{{$music->title}}">
    </div>
    <div>
        <label for="Artist">Year:</label>
        <input type="text" id="Artist" name="Artist" value="{{$music->Artist}}">
    </div>
    <div>
        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" value="{{$music->duration}}">
    </div>
    <div>
        <button type="submit">Save Changes</button>
    </div>
    </form>
</x-layout>