<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $categorys=Category::latest()->paginate(10);
        return view('dashboard.category.show_category', compact('categorys'));
    }

    public function create()
    {
        return view('dashboard.category.create_category');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        
        // $slug = Str::slug($request->name); 

        Category::create([
            'name' => $request->name,
            // 'slug' => $slug, 
        ]);
        return back()->with('message', 'Category Added SuccessFull');
    }

    public function show()
    {
       
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit_category', compact('category'));
    }

    public function update(Request $request, Category $category)
    {   
        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
        ]);
        return redirect('/categories')->with('message', 'Category Update SuccessFull');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with('message', 'Category Delete SuccessFull');
    }
}