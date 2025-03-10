<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="user-name" content="{{ Auth::user()->name ?? 'Guest' }}">
    <title>Planker</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- HEADER -->
    <x-header />

    <main class="my-18 h-screen">

    {{$slot}}

    </main>
</body>

</html>