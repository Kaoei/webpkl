<div class="grid grid-cols-3 gap-4">
    @foreach($products as $p)
    <div class="card w-64 bg-white p-4 rounded-lg shadow-lg transition-transform duration-200 hover:scale-105">
        <div class="w-52 h-52 overflow-hidden rounded-t-lg">
            <img src="{{ asset($p->product_img) }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="h-24 mt-4">
            <h1 class="font-bold text-xl">{{ $p->title }}</h1>
            <p class="text-sm text-justify mt-2 line-clamp-2">
                {{ $p->description }}
            </p>
            <p class="text-lg font-semibold mt-0.5 text-blue-500">
                Rp. {{ number_format($p->price,0,'.','.') }}
            </p>
        </div>
        <div class="mt-3 bg-blue-500 text-white px-4 py-1 rounded-sm text-center">
            <a href="{{ route('detail', $p->id_product) }}">Order</a>
        </div>
    </div>
    @endforeach
</div>
