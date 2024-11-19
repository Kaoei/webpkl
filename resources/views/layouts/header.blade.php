<nav class="flex items-center justify-between p-5 bg-white shadow-md">
    {{-- logo --}}
    <div class="text-2xl font-bold">
        <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600">
            Inovatech
        </a>
    </div>

    {{-- menu --}}
    <div class="hidden md:flex items-center space-x-8">
        <ul class="flex space-x-6">
            <li><a href="#about" class="text-gray-800 hover:text-blue-600">About</a></li>
            <li><a href="#service" class="text-gray-800 hover:text-blue-600">Service</a></li>
            <li><a href="{{ route('list') }}" class="text-gray-800 hover:text-blue-600">Store</a></li>
            <li><a href="#footer" class="text-gray-800 hover:text-blue-600">Contact</a></li>
        </ul>

        {{-- user login/register --}}
        <div class="flex items-center space-x-4">
            @if (Auth::check())
            <a href="/" class="flex items-center space-x-2">
                <i class="fa-solid fa-user"></i>
                <span class="text-gray-800">{{ Auth::user()->name }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700">Logout</button>
            </form>
            @else
            <a href="{{ route('login') }}" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white">Register</a>
            @endif
        </div>
    </div>

    {{-- mobile menu button --}}
    <div class="md:hidden">
        <button id="menu-btn" class="text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

{{-- mobile menu --}}
<div id="mobile-menu" class="hidden md:hidden">
    <ul class="flex flex-col items-center space-y-4 mt-4">
        <li><a href="{{ route('list') }}" class="text-gray-800 hover:text-blue-600">Store</a></li>
        <li><a href="#" class="text-gray-800 hover:text-blue-600">Lorem Ipsum</a></li>
        <li><a href="#" class="text-gray-800 hover:text-blue-600">Lorem Ipsum</a></li>
        @if (Auth::check())
        <li><a href="#" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Dashboard</a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700">Logout</button>
            </form>
        </li>
        @else
        <li><a href="{{ route('login') }}" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Login</a></li>
        <li><a href="{{ route('register') }}" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white">Register</a></li>
        @endif
    </ul>
</div>

<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
