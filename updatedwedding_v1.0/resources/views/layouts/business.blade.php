<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>@yield('title', 'Wedding India Expo 2026')</title>
    <meta name="description" content="@yield('description', 'Join our expo')">

    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Livewire -->
    @livewireStyles
</head>
<body>

    <!-- HEADER -->
    <header   style="padding:10px; background:#99103d; color:#fff;">
        <div class="ml-10">
            <h4 class="mb-1">Wedding India Expo</h4>
            <small>Participating in the Wedding India Expo 2026 gives your brand a powerful platform to connect, showcase, and grow in one of the fastest-growing wedding markets.</small>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main style="padding:40px;">
        {{$slot}}
    </main>

    <!-- FOOTER -->
    <footer style="padding:5px; background:#f5f5f5;">
        <p>© 2026 Wedding India Expo</p>
    </footer>

    <!-- Livewire -->
    @livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>