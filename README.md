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
This code defines a search form for a music website's back-end logic for handling the search functionality. The code can be found in the `index.blade.php` file. Allowing users to search for songs. It uses a `GET` method to send the search query to the `/music` route, where the results will be displayed. The search input retains the query value `({{ request('search') }})` after the form is submitted, ensuring a seamless user experience.

```php 
public function index(Request $request)
{
    $search = $request->input('search');
    $music = Music::when($search, function ($query, $search) {
        return $query->where('title', 'like', '%' . $search . '%')
                     ->orWhere('artist', 'like', '%' . $search . '%')})
};
```
The front-end form for submitting the search query.This code defines a method in a Laravel controller that handles music search. The code can be located in the `musicController.php` file. It retrieves the search query from the request and uses it to filter music records based on the `title` or `artist`. If a search query is provided, it returns music records that match the search term; otherwise, it returns all music.

2. **Pagination**
```php
<div class="pagination-container">
    @if ($music->hasPages())
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($music->onFirstPage())
                <span class="disabled">« Previous</span>
            @else
                <a href="{{ $music->previousPageUrl() }}" rel="prev">« Previous</a>
            @endif

            {{-- Pagination Links --}}
            @foreach ($music->links()->elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <a href="{{ $url }}" class="{{ $page == $music->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($music->hasMorePages())
                <a href="{{ $music->nextPageUrl() }}" rel="next">Next »</a>
            @else
                <span class="disabled">Next »</span>
            @endif
        </div>
```

Displaying code is done in the `index.blade.php` file. the purpose od the code is to display links for navigating between multiple pages of music results. It checks if there are multiple pages of results `($music->hasPages())` and generates links for the previous page, page numbers, and the next page, highlighting the current page. Activily checking for more pages..`$music->hasMorePages()`.If the user is already on the first page `($music->onFirstPage())`, the "Previous" button is disabled (it cannot be clicked).
If the user is not on the first page, a clickable link is generated that takes the user to the previous page `($music->previousPageUrl())`.
```php 
->paginate(5);
```
In the file `musicController.php` I have validated my data by only allowing 5 items to display on each page. The purpose of adding pagination to my wesite is to reduce user overwhelming and to reduce load time of a page. Also improving the overall look and design of the website.