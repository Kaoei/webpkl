<!-- Search Form -->
<div class="w-[24rem] pl-5">
    <h1 class="font-bold text-2xl">Search</h1>
    <form action="{{ route('sort') }}" method="GET" class="mb-3">
        <input type="text" name="search" id="search" class="bg-white py-1.5 w-[15rem] rounded-lg px-3 shadow-lg" placeholder="Search..." value="{{ request()->input('search') }}">
        <button type="submit" class="hidden"></button> 
    </form>

    <!-- Category Filter -->
    <h1 class="font-bold text-2xl mb-2">Category</h1>
    <ul class="space-y-5">
        @foreach($categories as $c)
        <li class="py-1.5 rounded-md w-64 px-3
            {{ request()->input('category') == $c->id ? 'bg-blue-500 text-white' : 'hover:bg-blue-500 hover:text-white' }}">
            <a href="{{ route('sort', ['category' => $c->id, 'search' => request()->input('search')]) }}">
                {{ $c->name }}
            </a>
        </li>
        @endforeach
    </ul>

</div>