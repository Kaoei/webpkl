<!-- Sidebar -->
<aside class="w-64 bg-blue-900 h-screen text-white fixed top-0 left-0 z-10 transition-all duration-300 ease-in-out">
    <div class="p-6 flex flex-col h-full">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-white mb-2">Dashboard</h1>
            <p class="text-lg opacity-75">Hello, {{ Auth::user()->name }}</p>
        </div>

        <!-- Navigation -->
        <nav class="flex-1">
            <ul class="space-y-4">
                <!-- Dashboard Link -->
                <li>
                    <a href="{{ route('dashboard') }}" 
                       class="block py-3 px-4 rounded-lg hover:bg-blue-700 transition-all duration-200 ease-in-out transform hover:scale-105">
                        <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                    </a>
                </li>

                <!-- Orders Link -->
                <li>
                    <a href="{{ route('order') }}" 
                       class="block py-3 px-4 rounded-lg hover:bg-blue-700 transition-all duration-200 ease-in-out transform hover:scale-105">
                        <i class="fas fa-box mr-3"></i> Orders
                    </a>
                </li>

                <!-- Products Link -->
                <li>
                    <a href="{{ route('product') }}" 
                       class="block py-3 px-4 rounded-lg hover:bg-blue-700 transition-all duration-200 ease-in-out transform hover:scale-105">
                        <i class="fas fa-cogs mr-3"></i> Products
                    </a>
                </li>

                <!-- Category Link -->
                <li>
                    <a href="{{ route('category') }}" 
                       class="block py-3 px-4 rounded-lg hover:bg-blue-700 transition-all duration-200 ease-in-out transform hover:scale-105">
                        <i class="fas fa-tags mr-3"></i> Category
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Logout Button (more prominent) -->
        <div class="mt-auto">
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="block py-3 px-4 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 transition-all duration-200 ease-in-out transform hover:scale-105 mt-6">
                <i class="fas fa-sign-out-alt mr-3"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</aside>

