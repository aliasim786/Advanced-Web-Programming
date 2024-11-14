# Ali's Music App

## Scenario overview

In today’s fast-paced digital world, music is an essential part of our daily lives. Melodify is a user-friendly web application built to offer an immersive music discovery and streaming experience. It allows users to search for songs, discover new artists, and add or remove songs from playlists. Whether you're looking for the latest hits or exploring new genres, Melodify provides a personalised music experience tailored to user tastes.

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

2. **Pagination:**
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

Displaying code is done in the `index.blade.php` file. The purpose of the code is to display links for navigating between multiple pages of music results. It checks if there are multiple pages of results `($music->hasPages())` and generates links for the previous page, page numbers, and the next page, highlighting the current page. Activily checking for more pages..`$music->hasMorePages()`.If the user is already on the first page `($music->onFirstPage())`, the "Previous" button is disabled (it cannot be clicked).
If the user is not on the first page, a clickable link is generated that takes the user to the previous page `($music->previousPageUrl())`.
```php 
->paginate(5);
```
In the file `musicController.php` I have validated my data by only allowing 5 items to display on each page. The purpose of adding pagination to my wesite is to reduce user overwhelming and to reduce load time of a page. Also improving the overall look and design of the website.

3. **User input Validation:**
```php
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
```
This is a validation error I have implemented into the `create.blade.php` file. using `$errors->any()`. Typically styled to show an error message. This helps inform users about invalid input or incomplete forms, ensuring they can correct mistakes before resubmitting. It's a common and essential UX practice in forms to improve usability and guide users through the submission process.

``` php
  $validated = $request->validate([
        'title' => 'required|string|max:255',
        'Artist' => 'required|string|max:255',
        'duration' => 'required|numeric|min:1', 
    ]);
```
In the `musicController.php` file I have added this code into the `update` and `store` functions. The `$request->validate()` method is used to apply validation rules to the incoming data from a form submission. In this case, it ensures that the `title` and `Artist` fields are required, strings, and no longer than 255 characters, and that the `duration` field is a required numeric value with a minimum of 1. If the validation fails, it automatically redirects the user back to the form with error messages.

4. **CSS FlexBox:**
``` php 
/* Form styling */
.edit-song-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
```
In this case, the `.edit-song-form container` is set to flexbox layout with `display: flex;`. The flex-direction: column; ensures that the child elements (like form fields) are stacked vertically in a column. The `gap: 20px;` creates 20px of space between each child element inside the form. This helps in aligning form fields neatly and responsively without needing to manually set margins or padding.

This use of flexbox ensures that the layout adapts easily to different screen sizes and maintains proper spacing between form elements.

Here are some more examples of FlexBox:
``` php 
/* Style for the navigation links */
.nav-links {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}
```
``` php 
/* Style for the search bar container */
.search-container {
  display: flex;
  align-items: center;
}
```

## Conclusion

Overall the app is a feature-rich music platform that offers users a seamless experience in discovering, managing, and enjoying music. With robust search functionality, playlist management, and user-friendly interface, it provides a personalised music experience. Future enhancements, like user accounts, social features, and an audio player, will further elevate the platform's interactivity and user engagement.