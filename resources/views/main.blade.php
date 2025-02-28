<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @include('utils.links')
    @include('utils.scripts')
    <title>{{ @Str::upper($title) }}</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        @include('utils.navbar')

        @yield('container')


    </div>


</body>

</html>
