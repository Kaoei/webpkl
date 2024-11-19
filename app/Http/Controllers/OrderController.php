<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

    public function order()
    {
        $orders = Order::latest()->paginate(5);
        // dd($orders); 
        return view('admins.order.view', compact('orders'));
    }
    

public function createOrder(Request $request)
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Anda harus login untuk membuat pesanan.');
    }

    $validated = $request->validate([
        'id_product' => 'required|exists:products,id_product',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'domain_name' => 'required|string|max:255',
        'catatan' => 'nullable|string|max:500',
        'bukti_tf' => 'required|mimes:jpg,jpeg,png|max:2048',
    ]);

    $filePath = $this->uploadPaymentProof($request->file('bukti_tf'));

    if (!$filePath) {
        return back()->with('error', 'Gagal mengunggah bukti transfer. Silakan coba lagi.');
    }

    Order::create([
        'id_user' => Auth::id(),
        'id_product' => $validated['id_product'],
        'name' => $validated['name'],
        'email' => $validated['email'],
        'domain_name' => $validated['domain_name'],
        'catatan' => $validated['catatan'] ?? '',
        'bukti_tf' => $filePath,
        'status' => 'pending',
    ]);

    return back()->with('message', 'Pesanan berhasil dibuat!');
}

private function uploadPaymentProof($file)
{
    try {
        $path = 'order/image';
        $newName = time() . '.' . $file->getClientOriginalExtension();

        if (!Storage::exists($path)) {
            Storage::makeDirectory($path);
        }

        $file->storeAs($path, $newName, 'public');

        return $path . '/' . $newName;
    } catch (\Exception $e) {
        Log::error('File upload error: ' . $e->getMessage());
        return false;
    }
}


    public function update(Request $request, $id_order)
{
    $request->validate([
        'status' => 'required',
    ]);

    $order = Order::findOrFail($id_order);
    $order->status = $request->status;
    $order->save();

    return back()->with('success', 'Status berhasil diperbarui!');
}

public function detail($id)
{
    $order = Order::with(['user', 'product'])->find($id); 
    return view('admins.order.detail', compact('order'));
}

public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return back()->with('success', 'Pesanan berhasil dihapus!');


}

}
