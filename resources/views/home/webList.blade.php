<div class="mb-24">
    <div class="text-2xl font-bold mx-28 mb-8 text-start">
        <h1>Create Your Website Now</h1>
    </div>

    <div class="mx-28 grid grid-cols-1 gap-8">
        @foreach($products as $p)
        <div class="flex bg-white shadow-lg w-full p-8 rounded-lg gap-8">
            <div class="w-64">
                <img src="{{ asset('img/dummy.png') }}" alt="Website Image" class="w-full rounded-lg">
            </div>

            <div class="flex flex-col gap-4">
                <h1 class="text-3xl font-bold">{{ $p->title }}</h1>
                <p class="text-base text-gray-600">{{ $p->description }}</p>
                <div class="text-2xl font-semibold text-blue-500">Rp. {{ number_format($p->price,0,'.','.') }}</div>
                <a href="#" class="bg-blue-600 text-white py-2 px-8 rounded-md w-fit hover:bg-blue-700 transition duration-300">Order Now</a>
            </div>
        </div>
        @endforeach
        
        <div class="flex justify-center mt-8">
            <a href="{{ route('list') }}" class="text-white font-medium bg-blue-600 py-2 px-6 rounded-md hover:bg-blue-700 transition duration-300">See More</a>
        </div>

    </div>
</div>