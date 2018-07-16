@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.navbar')

        <div class="container">
            <div class="row justify-content-center">
                    @include('layouts.channel_list')
            <div class="col-md-8">
                @yield('content')
            </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
