<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys=Category::latest()->get();
        return view('dashboard.category.show_category', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect('/categories')->with('message', 'Register Success');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {   
        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
        ]);
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}