<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://app.diagrams.net/#G1-z0lmhZ4sgbwWJaIssMkONVyfsbQO2fX#%7B%22pageId%22%3A%22c9db0220-8083-56f3-ca83-edcdcd058819%22%7D" rel="stylesheet">
    </head>
    <body>
        <h1>"以下に記入してください"</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>