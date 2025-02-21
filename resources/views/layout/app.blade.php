<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <!-- Hero Section -->
    <div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        @include ('layout.header')
    </header>

    <div class="container">
        @yield('content')
    </div>



    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow-sm dark:bg-white-900 m-4">
        @include ('layout.footer')
    </footer>


</body>
</html>