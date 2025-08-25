<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Event App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>



<!-- Navbar -->
@include('layout.navbar')

<!-- Content -->
<main class="flex-1 pt-20">
    @yield('content')
</main>

<!-- Footer -->
@include('layout.footer')

</body>

</html>