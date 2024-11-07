<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/music">Playlist</a></li>
        <li><a href="/music/add"> Add Song</a></li>
        <li><a href="/music/about">About the app</a></li>
      </ul>
    </nav>
    {{$slot}}
  </body>
</html>