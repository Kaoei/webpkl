<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    function Index(){
        $categories = Category::latest()->paginate(5);

        return view('admins.category.view',compact('categories'));
    }

    function create(){
        return view('admins.category.create');
    }

    function store(Request $request){
        $validateData = $this->validate($request,[
            'name'=>'required'
        ]);

        Category::create($validateData);

        return redirect()->route('category')->with('message','Category created succesfully');
    }

    function edit($id){
        $categories = Category::find($id);
        return view('admins.category.edit',compact('categories'));
    }

    function update(Request $request,$id){
        $categories = Category::find($id);

        if($categories){
            $categories->update($request->all());
            return redirect()->route('category')->with('message','Category Updated');
        }else{
            return redirect()->route('category.edit',$id)->with('error','Category Failed to update');
        }
    }

    function delete($id){
        $categories = Category::find($id);
        if($categories){
            $categories->delete();

            return redirect()->route('category')->with('message','Deleted');
        }
    }
}
