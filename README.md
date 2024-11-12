# Ali's Music App

## Scenario overview

In today’s fast-paced digital world, music is an essential part of our daily lives. Melodify is a user-friendly web application built to offer an immersive music discovery and streaming experience. It allows users to search for songs, discover new artists, and add new songs or delete existing songs in a playlist. Whether you're looking for the latest hits or exploring new genres, Melodify provides a personalized music experience tailored to your tastes.

The goal of the app is to build a platform where users can search for songs by title or artist, create and manage playlists, and enjoy a smooth and interactive browsing experience. It is designed to help users easily discover and enjoy their favorite music on demand, all in one place.

## Objectives

My task is to focus on back-end functionality with Laravel (e.g., routing, controllers, database management, pagination) and front-end user interface design using Blade templates and simple CSS.:

1. Build the music search functionality using Laravel. The user should be able to search for songs by title or artist, with results paginated.
2. Implement playlist management: Allow users to create, view, and manage playlists.
3. Create a simple user interface: Use Blade templates and basic CSS to ensure the app is responsive.

## My added Features 

1. **Search feature:**
```php 
 <div class="search-container">
          <form action="/music" method="GET">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search songs..." />
            <button type="submit">Search</button>
          </form>
        </div>
```
This code defines a search form for a music website's back-end logic for handling the search functionality,, allowing users to search for songs. It uses a `GET` method to send the search query to the `/music` route, where the results will be displayed. The search input retains the query value `({{ request('search') }})` after the form is submitted, ensuring a seamless user experience.

```php 
public function index(Request $request)
{
    $search = $request->input('search');
    $music = Music::when($search, function ($query, $search) {
        return $query->where('title', 'like', '%' . $search . '%')
                     ->orWhere('artist', 'like', '%' . $search . '%')})
};
```
The front-end form for submitting the search query.This code defines a method in a Laravel controller that handles music search. It retrieves the search query from the request and uses it to filter music records based on the `title` or `artist`. If a search query is provided, it returns music records that match the search term; otherwise, it returns all music.
