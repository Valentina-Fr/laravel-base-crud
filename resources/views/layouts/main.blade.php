<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dc Comics | @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('includes.header')
    <div id="jumbo"></div>
    <main>
       @yield('content')
    </main>
    @include('includes.dc')
    @include('includes.footer')
    @yield('scripts')
</body>
</html>