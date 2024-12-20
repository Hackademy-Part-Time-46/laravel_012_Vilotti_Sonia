<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("index", compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }
    public function store(Request $request)
    {

        Product::create(
            [
                'name' => $request->name,
                'price' => $request->price
            ]
        );
        return to_route('index');
    }
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }
    public function update(Request $request)
    {

        Product::where('id', $request->id)->update(['name' => $request->name, 'price' => $request->price]);
        return to_route('index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('index');
    }
}
