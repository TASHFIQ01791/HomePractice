<!DOCTYPE html>
<html lang="en">
      <!-- Head Part -->
    <head>
        @include('website.includes.head')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('website.includes.nav')
        <!-- Page Content-->
        @yield('content')  <!-- This is Changing Part -->
        <!-- Footer-->
        @include('website.includes.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ url('assets/website/js/scripts.js') }}"></script>
    </body>
</html>
