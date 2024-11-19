<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">

        <!-- Sidebar -->
        @include('admins.layouts.sidebar')

        <!-- Main Content -->
        <main class="flex-1 ml-64 p-6"> 
            @yield('content')
        </main>

    </div>
</body>
</html>
