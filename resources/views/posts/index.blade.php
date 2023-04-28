<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($food as $i)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $i->id }}">{{ $i->title }}</a>
                    </h2>
                    <p class='body'>{{ $i->body }}</p>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
        <div class='paginate'>
            {{ $food->links() }}
        </div>
    </body>
</html>