<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.head')
    </head>

    <body>
        @include('layouts.partials.sidebar')

        <main class="content">
            @include('layouts.partials.header')

            @yield('content')
        </main>

        @include('layouts.partials.js')
    </body>
</html>
