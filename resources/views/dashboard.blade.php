<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <nav class="p-4 shadow flex justify-between">
        <h2>Dashboard</h2>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <div class="p-6">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <p>You are logged in successfully.</p>
    </div>

    @livewireScripts
</body>

</html>