<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index() : View
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $providers = Provider::all();
        return view('products.create', compact('categories', 'providers'));
    }

    public function store(StoreProductRequest $request) : RedirectResponse
    {
        $validated = $request->validated();
        $validated['delete_flag'] = 1;
        Product::create($validated);

        return redirect()->route('products.index')
                ->withSuccess('Thêm thành công.');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->validated());

        return redirect()->route('products.index')
                ->withSuccess('Cập nhật thành công.');
    }

    public function destroy(Product $product)
    {
        //
    }
}
