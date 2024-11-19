<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="px-6 py-3 text-left">Nama</th>
                <th class="px-6 py-3 text-left">Status</th>
                <th class="px-6 py-3 text-left">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            @if($orders->isEmpty())
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center">There is no data</td>
                </tr>
            @else
                @foreach($orders as $o)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $o->name }}</td>
                    <td class="px-6 py-4" style="color: {{ $o->status == 'pending' ? 'yellow' : ($o->status == 'success' ? 'green' : 'red') }};">
                        {{ $o->status }}
                    </td>
                    <td class="flex items-center pt-1.5 gap-4">
                        <a href="{{ route('order.detail', $o->id_order) }}" class="bg-green-500 text-white block px-4 py-2 rounded hover:bg-green-700">Detail</a>
                        <button 
                            onclick="openModal({{ $o->id_order }}, '{{ $o->status }}')" 
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Update Status
                        </button>
                        <form action="{{route('order.delete',$o->id_order) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
<div class="mt-4">
    {{ $orders->links('pagination::tailwind') }} 
</div>

<div id="updateStatusModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Update Status</h2>
        <form id="updateStatusForm" method="POST">
            @csrf
            @method('put')
            <input type="hidden" name="id_order" id="modalOrderId">
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select name="status" id="modalStatus" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    <option value="pending">Pending</option>
                    <option value="success">Success</option>
                    <option value="cancel">cancel</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 mr-2">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
  function openModal(id_order, status) {
    document.getElementById('modalStatus').value = status;
    document.getElementById('updateStatusForm').action = `/order/update/${id_order}`;
    document.getElementById('updateStatusModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('updateStatusModal').classList.add('hidden');
}
</script>