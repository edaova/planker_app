<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planker</title>
    @vite('resources/css/app.css')
</head>

<body>

<div class="p-2 container mx-auto flex flex-col items-center justify-center lg:flex-row lg:gap-15 mt-28">

    {{$slot}}
    
</div>

</body>
</html>
