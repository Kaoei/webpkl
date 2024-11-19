<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'list', 'details', 'admin','sortBy']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);
        return view('home.index',compact('products'));
    }

    public function list()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('menu.index',compact('products','categories'));
    }

    public function details($id_product){
        $product = Product::find($id_product);
        return view('menu.detail',compact('product'));
    }

    public function sortBy(Request $request)
{
    $search = $request->input('search');
    $categoryId = $request->input('category');

    $categories = Category::all();

    $products = Product::when($categoryId, function($query) use ($categoryId) {
            return $query->where('category_id', $categoryId);
        })
        ->when($search, function($query) use ($search) {
            return $query->where('title', 'like', '%' . $search . '%');
        })
        ->get();

    return view('menu.index', compact('products', 'categories'));
}



}
