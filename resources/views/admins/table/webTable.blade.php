<table class="min-w-full table-auto">
    <thead class="bg-gray-200 text-gray-700">
        <tr>
            <th class="px-6 py-3 text-left">Title</th>
            <th class="px-6 py-3 text-left">Category</th>
            <th class="px-6 py-3 text-left">Action</th>
        </tr>
    </thead>
    <tbody class="text-gray-600">
        @foreach($products as $a)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ $a->title }}</td>
            <td class="px-6 py-4">{{$a->category->name}}</td>
            <td class="flex items-center pt-1.5 gap-2">
                <a href="{{ route('product.detail', $a->id_product) }}" class="bg-green-500 text-white block px-4 py-2 rounded hover:bg-green-700">Detail</a>
                <a href="{{ route('product.edit', $a->id_product ) }}" class="bg-blue-500 text-white px-4 block py-2 rounded hover:bg-blue-700">Edit</a>
                <form action="{{ route('product.delete',$a->id_product) }}" method="POST">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded  hover:bg-red-700">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $products->links('pagination::tailwind') }}
</div>
@if($products->isEmpty())
    <div class="text-center text-gray-500 mt-4">
        There is no data
    </div>
@endif