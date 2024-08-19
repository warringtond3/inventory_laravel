@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ProductName">Product Name</label>
            <input type="text" name="ProductName" id="ProductName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="CategoryID">Category</label>
            <select name="CategoryID" id="CategoryID" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->CategoryID }}">{{ $category->CategoryName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="SupplierID">Supplier</label>
            <select name="SupplierID" id="SupplierID" class="form-control" required>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->SupplierID }}">{{ $supplier->SupplierName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="UnitPrice">Unit Price</label>
            <input type="number" step="0.01" name="UnitPrice" id="UnitPrice" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="QuantityPerUnit">Quantity Per Unit</label>
            <input type="text" name="QuantityPerUnit" id="QuantityPerUnit" class="form-control">
        </div>
        <div class="form-group">
            <label for="UnitsInStock">Units In Stock</label>
            <input type="number" name="UnitsInStock" id="UnitsInStock" class="form-control">
        </div>
        <div class="form-group">
            <label for="ReorderLevel">Reorder Level</label>
            <input type="number" name="ReorderLevel" id="ReorderLevel" class="form-control">
        </div>
        <div class="form-group">
            <label for="Discontinued">Discontinued</label>
            <input type="checkbox" name="Discontinued" id="Discontinued">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
