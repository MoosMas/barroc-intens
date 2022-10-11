<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @yield('head')
</head>
<body>

    @include('includes.nav')

        <div class="container">
                <div class="col-md-8">
                    <div class="center">
                        @yield('content')
                    </div>
                </div>
        </div>
        <div class="row">
            @include('includes.footer')
        </div>
</body>
</html>