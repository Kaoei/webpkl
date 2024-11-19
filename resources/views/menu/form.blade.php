<div class="px-12">
    <div class="">
        <h1 class="font-bold text-2xl mb-2">Formulir Pembayaran :</h1>
    </div>
    <div class="w-[32rem]">
        
                    @if (session('message'))
                    <div class="bg-green-500 bg-opacity-75 text-white p-4 rounded mb-4">
                        {{ session('message') }}
                    </div>
                @endif
        
                @if (session('error'))
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
        <form action="{{ route('order.create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{ $product->id_product }}" name="id_product">

            <div class="mb-2 flex gap-1 flex-col items-start">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg" placeholder="Nama" required>
            </div>

            <div class="mb-2 flex gap-1 flex-col items-start">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg" placeholder="Email" required>
            </div>

            <div class="mb-2 flex gap-1 flex-col items-start">
                <label for="domain_name">Domain Name :</label>
                <input type="text" name="domain_name" id="domain_name" class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg" placeholder="Example.com" required>
            </div>

            <div class="mb-2 flex gap-1 flex-col items-start">
                <label for="notes">Notes :</label>
                <textarea name="catatan" class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg" style="resize: none; height: 10rem;" placeholder="Catatan"></textarea>
            </div>

            <div class="mb-2 flex gap-1 flex-col items-start">
                <label for="bukti_tf">Payment proof :</label>
                <input type="file" name="bukti_tf" id="bukti_tf" class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg" required>
            </div>

            <div class="bg-white py-1.5 w-full rounded-lg px-3 shadow-lg flex justify-between items-center text-lg" style="height: 3rem;">
                <h1 class="font-bold">Total :</h1>
                <p class="font-bold">Rp.{{ number_format($product->price, 0, '.', '.') }}</p>
            </div>

            <div class="w-full flex items-center justify-center bg-blue-500 text-white rounded-lg mb-12 mt-2 py-1.5">
                <button type="submit">Bayar</button>
            </div>
        </form>
    </div>
</div>
