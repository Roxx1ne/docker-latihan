<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{config('app.name')}}</title> -->
    <title>@yield('title', $title)</title>

    @include('partials.styles')
</head>

<body>
    @include('partials.header')
    <h1>@yield('title', $title)</h1>
    <main class="container mt-5">
        @yield('content')
    </main>
</body>

@include('partials.footer')
@include('partials.scripts')

</html>