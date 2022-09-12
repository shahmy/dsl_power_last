<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;

class ProductCategoryProductsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ProductCategory $productCategory)
    {
        $this->authorize('view', $productCategory);

        $search = $request->get('search', '');

        $products = $productCategory
            ->products()
            ->search($search)
            ->latest()
            ->paginate();

        return new ProductCollection($products);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProductCategory $productCategory)
    {
        $this->authorize('create', Product::class);

        $validated = $request->validate([
            'name' => ['required', 'string'],
            'small_description' => ['required', 'string'],
            'detail_description' => ['nullable', 'string'],
            'featured_image' => ['image', 'max:1024', 'required'],
            'status' => ['required', 'boolean'],
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        $product = $productCategory->products()->create($validated);

        return new ProductResource($product);
    }
}
