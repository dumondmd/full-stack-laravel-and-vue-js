<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full stack blog</title>
        <link rel="stylesheet" type="text/css" href="{{mix('/css/all.css')}}">
    </head>
    <body>
        <h1>
            Blog
        </h1>
        <div id="app">
            <mainapp></mainapp>
        </div>
        <script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
    </body>
</html>
