<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | Fooamy Laundry</title>
    @include('layout.source')
    @stack('style')
</head>
<body>
    @yield('content')
    @stack('script')
</body>
@include('layout.footer')
</html>
