<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoriesIndex()
    {
        $categories = Category::all();
        return view("categories-index", compact("categories"));
    }
    public function categoriesCreate()
    {
        return view("categories-create");
    }
    public function categoriesStore(Request $request)
    {
        $category = Category::create(['name' => $request->name]);
        return to_route('categories-index');
    }
    public function categoriesShow(Category $category)
    {
        return view('categories-show', compact('category'));
    }
    public function categoriesEdit(Category $category)
    {
        return view('categories-edit', compact('category'));
    }
    public function categoriesUpdate(Request $request, Category $category)
    {
        $category->update(['name' => $request->name]);
        return to_route('categories-index');
    }
    public function categoriesDestroy(Category $category)
    {
        $category->delete();
        return to_route('categories-index');
    }
}
