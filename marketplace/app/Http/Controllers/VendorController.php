<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VendorController extends Controller
{
    public function create() {
        return Inertia::render('Vendor/Register');
    }

    public function index()
    {
        $vendors = Vendor::all(); // Or with eager loading of products if needed
        return Inertia::render('Vendor/List', [
            'vendors' => $vendors,
        ]);
    }

    public function show(Vendor $vendor)
    {
        $vendor->load('products'); // eager load vendor's products
        return Inertia::render('Vendor/Show', [
            'vendor' => $vendor
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
        ]);

        Vendor::create([
            'user_id' => auth()->id(),
            'shop_name' => $request->shop_name,
            'description' => $request->description,
            'phone' => $request->phone,
        ]);

        return redirect('/')->with('success', 'Vendor registered successfully!');
    }
}
