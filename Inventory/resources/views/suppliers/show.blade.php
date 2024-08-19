@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Supplier Details</h1>
    <div class="form-group">
        <label for="SupplierName">Supplier Name</label>
        <input type="text" id="SupplierName" class="form-control" value="{{ $supplier->SupplierName }}" readonly>
    </div>
    <div class="form-group">
        <label for="ContactName">Contact Name</label>
        <input type="text" id="ContactName" class="form-control" value="{{ $supplier->ContactName }}" readonly>
    </div>
    <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" id="Address" class="form-control" value="{{ $supplier->Address }}" readonly>
    </div>
    <div class="form-group">
        <label for="City">City</label>
        <input type="text" id="City" class="form-control" value="{{ $supplier->City }}" readonly>
    </div>
    <div class="form-group">
        <label for="PostalCode">Postal Code</label>
        <input type="text" id="PostalCode" class="form-control" value="{{ $supplier->PostalCode }}" readonly>
    </div>
    <div class="form-group">
        <label for="Country">Country</label>
        <input type="text" id="Country" class="form-control" value="{{ $supplier->Country }}" readonly>
    </div>
    <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" id="Phone" class="form-control" value="{{ $supplier->Phone }}" readonly>
    </div>
    <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Back to Suppliers</a>
</div>
@endsection
