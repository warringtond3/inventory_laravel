@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="form-group">
        <label for="ProductName">Product Name</label>
        <input type="text" id="ProductName" class="form-control" value="{{ $product->ProductName }}" readonly>
    </div>
    <div class="form-group">
        <label for="CategoryName">Category</label>
        <input type="text" id="CategoryName" class="form-control" value="{{ $product->category->CategoryName }}" readonly>
    </div>
    <div class="form-group">
        <label for="SupplierName">Supplier</label>
        <input type="text" id="SupplierName" class="form-control" value="{{ $product->supplier->SupplierName }}" readonly>
    </div>
    <div class="form-group">
        <label for="UnitPrice">Unit Price</label>
        <input type="text" id="UnitPrice" class="form-control" value="{{ $product->UnitPrice }}" readonly>
    </div>
    <div class="form-group">
        <label for="QuantityPerUnit">Quantity Per Unit</label>
        <input type="text" id="QuantityPerUnit" class="form-control" value="{{ $product->QuantityPerUnit }}" readonly>
    </div>
    <div class="form-group">
        <label for="UnitsInStock">Units In Stock</label>
        <input type="text" id="UnitsInStock" class="form-control" value="{{ $product->UnitsInStock }}" readonly>
    </div>
    <div class="form-group">
        <label for="ReorderLevel">Reorder Level</label>
        <input type="text" id="ReorderLevel" class="form-control" value="{{ $product->ReorderLevel }}" readonly>
    </div>
    <div class="form-group">
        <label for="Discontinued">Discontinued</label>
        <input type="checkbox" id="Discontinued" disabled {{ $product->Discontinued ? 'checked' : '' }}>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
</div>
@endsection
