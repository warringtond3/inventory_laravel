@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->ProductID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ProductName">Product Name</label>
            <input type="text" name="ProductName" id="ProductName" class="form-control" value="{{ $product->ProductName }}" required>
        </div>
        <div class="form-group">
            <label for="CategoryID">Category</label>
            <select name="CategoryID" id="CategoryID" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->CategoryID }}" {{ $product->CategoryID == $category->CategoryID ? 'selected' : '' }}>{{ $category->CategoryName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="SupplierID">Supplier</label>
            <select name="SupplierID" id="SupplierID" class="form-control" required>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->SupplierID }}" {{ $product->SupplierID == $supplier->SupplierID ? 'selected' : '' }}>{{ $supplier->SupplierName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="UnitPrice">Unit Price</label>
            <input type="number" step="0.01" name="UnitPrice" id="UnitPrice" class="form-control" value="{{ $product->UnitPrice }}" required>
        </div>
        <div class="form-group">
            <label for="QuantityPerUnit">Quantity Per Unit</label>
            <input type="text" name="QuantityPerUnit" id="QuantityPerUnit" class="form-control" value="{{ $product->QuantityPerUnit }}">
        </div>
        <div class="form-group">
            <label for="UnitsInStock">Units In Stock</label>
            <input type="number" name="UnitsInStock" id="UnitsInStock" class="form-control" value="{{ $product->UnitsInStock }}">
        </div>
        <div class="form-group">
            <label for="ReorderLevel">Reorder Level</label>
            <input type="number" name="ReorderLevel" id="ReorderLevel" class="form-control" value="{{ $product->ReorderLevel }}">
        </div>
        <div class="form-group">
            <label for="Discontinued">Discontinued</label>
            <input type="checkbox" name="Discontinued" id="Discontinued" {{ $product->Discontinued ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
