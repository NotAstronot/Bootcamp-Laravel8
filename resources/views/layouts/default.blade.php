<!DOCTYPE html>
<html lang="en">
        <head>

            @include('includes.fronsite.meta')

            <title>@yield('title') | MeetDoctor</title>

            @stack('before-style')
                @include('includes.fronsite.style')
            @stack('after-style')


        </head>
    <body>
            @include('components.fronsite.header')
                @yield('content')
            @include('components.fronsite.footer')


            @stack('before-script')
                @include('includes.fronsite.script')
            @stack('after-script')

            {{-- jika punya model diletakan dibawah disini --}}

    </body>
</html>