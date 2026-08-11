<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
</head>

<body>

    @include('partails.header')


    @yield('main')


    @include('partails.footer')

</body>

</html>