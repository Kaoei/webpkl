    <!-- Main Content -->
    @extends('admins.layouts.app')

    @section('content')

    <h2 class="text-3xl font-bold mb-6">Dashboard Overview</h2>

    <!-- Metrics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Orders -->
        <div class="bg-white shadow-md rounded p-6 text-center">
            <h3 class="text-xl font-semibold mb-2">Total Orders</h3>
            <p class="text-3xl font-bold">{{ \App\Models\order::count() }}</p>
        </div>


        <!-- Completed Orders -->
        <div class="bg-white shadow-md rounded p-6 text-center">
            <h3 class="text-xl font-semibold mb-2">Completed Orders</h3>
            <p class="text-3xl font-bold">{{ \App\Models\Order::where('status', 'success')->count() }}</p>
        </div>

        <!-- Total Products -->
        <div class="bg-white shadow-md rounded p-6 text-center">
            <h3 class="text-xl font-semibold mb-2">Total Products</h3>
            <p class="text-3xl font-bold">{{ \App\Models\Product::count() }}</p>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg mt-10">
        @include('admins.table.orderTable')
    </div>

    @endsection


