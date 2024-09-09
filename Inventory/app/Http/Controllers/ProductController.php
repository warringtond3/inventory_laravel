<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Log the incoming request data
        // \Log::info('Received data:', $request->all());

        // Cast 'Discontinued' to a boolean
        $request->merge([
            'Discontinued' => $request->has('Discontinued'),
        ]);

        try {
            $validatedData = $request->validate([
                'ProductName' => 'required|max:100',
                'CategoryID' => 'required|exists:categories,CategoryID',
                'SupplierID' => 'required|exists:suppliers,SupplierID',
                'QuantityPerUnit' => 'nullable|max:50',
                'UnitPrice' => 'nullable|numeric',
                'UnitsInStock' => 'nullable|integer',
                'UnitsOnOrder' => 'nullable|integer',
                'ReorderLevel' => 'nullable|integer',
                'Discontinued' => 'boolean',
            ]);
        
            // \Log::info('Validated data:', $validatedData);

            Product::create($validatedData);

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed:', $e->errors());
            return back()->withErrors($e->errors())->withInput();
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        // Cast 'Discontinued' to a boolean
        $request->merge([
            'Discontinued' => $request->has('Discontinued'),
        ]);
        
        $validatedData = $request->validate([
            'ProductName' => 'required|max:100',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'SupplierID' => 'required|exists:suppliers,SupplierID',
            'QuantityPerUnit' => 'nullable|max:50',
            'UnitPrice' => 'nullable|numeric',
            'UnitsInStock' => 'nullable|integer',
            'UnitsOnOrder' => 'nullable|integer',
            'ReorderLevel' => 'nullable|integer',
            'Discontinued' => 'boolean',
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
