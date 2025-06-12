<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Jobber | Find and list jobs'}}</title>
</head>
<body>
<x-header />
<main class="container mx-auto p-4 mt-4 bg-amber-100">
    {{$slot}}
</main>
</body>
</html>
