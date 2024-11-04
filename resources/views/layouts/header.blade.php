<nav class="flex border-b  justify-between px-12 py-3 shadow-md">
    {{-- logo --}}
    <div class="logo font-bold text-2xl">
        <a href="{{ route('home') }}">
            Inovatech
        </a>
    </div>

    {{-- menu --}}
    <div class="flex items-center space-x-12">
    
    <ul class="flex gap-5">
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
        <li><a href="">Lorem Ipsum</a></li>
    </ul>

    {{-- user login/register --}}
    <div class="user flex gap-3 items-center">
        {{-- @if (Auth::check())
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif --}}

        <a href="" class="border py-1 px-4 rounded-lg text-white bg-blue-950">Login</a>
        <a href="" class="border py-1 px-4 rounded-lg text-blue-950 border-blue-950">Register</a>
    </div>

    </div>

</nav>