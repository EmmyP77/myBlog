<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog | Post</title>

        <link rel="stylesheet" href="/app.css">

    </head>
    <body>
        <?= $post ?>
        <a href="/">Go back</a>
    </body>
</html>
