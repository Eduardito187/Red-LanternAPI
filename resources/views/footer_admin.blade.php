    <script src="{{ asset(env('PUBLIC_PATH').'js/app.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/popper/popper.min.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset(env('PUBLIC_PATH').'js/jquery/jquery-3.5.1.slim.min.js') }}"></script>
    @yield('scripts')
</html>