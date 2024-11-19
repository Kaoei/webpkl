<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function product(){
        $products = Product::latest()->paginate(8);
        return view('admins.product.view',compact('products'));
    }

    function createProduct(){
        return view('admins.product.create');
    }

    public function create(Request $request){
        $validates = $this->validate($request,[
            'title'=>'required',
            'product_img'=>'required|mimes:jpg,jpeg,png|max:1000',
            'category_id'=>'required',
            'description'=>'required',
            'price' => 'required|numeric|min:0'
        ]);

        // dd($validates); 

        $img = $request->file('product_img');
        $new_name = time().'.'.$img->getClientOriginalExtension();
        $path = public_path('products/image');
        $img->move($path,$new_name);

        $validates['product_img'] = 'products/image/' . $new_name;

        Product::create($validates);

        return redirect()->route('product')->with('message','Product created successfully');
    }

    public function detail($id_product){
        $product = Product::find($id_product);

        return view('admins.product.detail',compact('product'));
    }

    public function edit($id_product){
        $product = Product::find($id_product);

        return view('admins.product.edit',compact('product'));
    }

    public function update(Request $request,$id_product){
        $product = Product::find($id_product);

        if($product){
            $product->update($request->all());

            if($request->hasFile('product_img')){
                $this->validate($request,[
                    'product_img'=>'required|mimes:jpeg,jpg,png|max:1000',
                ]);
            
                $image = $request->file('product_img');
                $new_name = time().'.'.$image->getClientOriginalExtension();
                $path = public_path('products/image');
                $image->move($path,$new_name);

                $product->update([
                    'product_img'=>$new_name,
                ]);

                return redirect()->route('product')->with('message','Updated Succesfully');
            }

            return redirect()->route('product')->with('message','Updated Succesfully');
        }
    }

    public function delete($id_product){
        $product = Product::find($id_product);

        if($product){
            $product->delete();
            return redirect()->route('product')->with('message','Deleted Succesfully');
        }
    }
}
