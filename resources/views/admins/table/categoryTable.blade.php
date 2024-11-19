<table class="min-w-full table-auto">
    <thead class="bg-gray-200 text-gray-700">
        <tr>
            <th class="px-6 py-3 text-left">Category</th>
            <th class="px-6 py-3 text-left">Action</th>
            
        </tr>
    </thead>
    <tbody class="text-gray-600">
        @foreach($categories as $s)
        <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4">{{ $s->name }}</td>
            <td class="flex items-center pt-1.5">
                <a href="{{ route('category.edit',$s->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                <form action="{{ route('category.delete',$s->id)}}" method="POST">
                    @csrf 
                    @method('delete')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-4 hover:bg-red-700">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div class="mt-4">
    {{ $categories->links('pagination::tailwind') }} 
</div>

@if($categories->isEmpty())
    <div class="text-center text-gray-500 mt-4">
        There is no data
    </div>
@endif
