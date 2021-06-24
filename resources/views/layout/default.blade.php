<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- stylesheet --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Comics Shop @yield('page_title')</title>
</head>
<body>
    
    @include('partials.header')
    <main>

        @yield('content')
    
    </main>

</body>
</html>