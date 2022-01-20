<!DOCTYPE html>
<html lang="en">
        {{-- Start Head --}}
        @include('main.partials.head')
        {{-- Stop Head --}}
<body>
    <div class="body">

        {{-- Start Header --}}
        @include('main.partials.header')
        {{-- Stop Header --}}

        <div role="main" class="main">
            @yield('content')
        </div> <!-- Role Main-->

        {{-- Start Footer --}}
        {{-- @include('main.partials.footer') --}}
        {{-- Stop Footer --}}

    </div>
</body>
        {{-- Start Script --}}
        @include('main.partials.script')
        {{-- Stop Script --}}

</html>
