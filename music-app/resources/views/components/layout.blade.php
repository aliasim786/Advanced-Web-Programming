<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <header>
      <nav>
        <ul class="nav-links">
          <li><a href="/music">Playlist</a></li>
          <li><a href="/music/add">Add Song</a></li>
          <li><a href="/music/about">About the app</a></li>
        </ul>
        <div class="search-container">
          <form action="/music/search" method="GET">
            <input type="text" name="query" placeholder="Search songs..." />
            <button type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    {{$slot}}
  </body>
</html>
