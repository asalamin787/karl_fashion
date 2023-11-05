<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            'name' => 'required',
        ]);

        
        $slug = Str::slug($request->name);
        //
        $category=Category::where('slug',$slug)->first();
        if($category){
            $random = Str::random(10);
            $slug=$slug.$random;
        }
        dd($slug); 

        Category::create([
            'name' => $request->name,
            'slug' => $slug, 
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