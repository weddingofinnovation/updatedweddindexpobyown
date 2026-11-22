<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Article CMS' }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @livewireStyles

</head>

<body class="bg-gray-50">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Right Side -->
    <div class="flex-1 flex flex-col">

        <!-- Header -->
        @include('partials.header')
        
    
        <!-- Page -->
        <main class="flex-1">

            <div class="max-w-7xl mx-auto p-8">

                {{ $slot }}

            </div>

        </main>

    </div>

</div>

@livewireScripts

</body>

</html>