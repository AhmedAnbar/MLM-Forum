<script src="{{ asset('js/toastr.min.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js" async></script>
    @include('layouts.toastr')
    @yield('script')
    <script async>hljs.initHighlightingOnLoad();</script>