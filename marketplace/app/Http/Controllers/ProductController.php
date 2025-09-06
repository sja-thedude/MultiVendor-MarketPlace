<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // List all products
    public function index()
    {
        $products = Product::with('vendor')->get(); // eager load vendor
        return Inertia::render('Product/List', [
            'products' => $products
        ]);
    }

    // Show single product
    public function show(Product $product)
    {
        $product->load('vendor'); // eager load vendor
        return Inertia::render('Product/Show', [
        'product' => $product
    ]);
    }

    public function vendor()
{
    return $this->belongsTo(Vendor::class);
}
}
