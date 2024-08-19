@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="SupplierName">Supplier Name</label>
            <input type="text" name="SupplierName" id="SupplierName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ContactName">Contact Name</label>
            <input type="text" name="ContactName" id="ContactName" class="form-control">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="Address" id="Address" class="form-control">
        </div>
        <div class="form-group">
            <label for="City">City</label>
            <input type="text" name="City" id="City" class="form-control">
        </div>
        <div class="form-group">
            <label for="PostalCode">Postal Code</label>
            <input type="text" name="PostalCode" id="PostalCode" class="form-control">
        </div>
        <div class="form-group">
            <label for="Country">Country</label>
            <input type="text" name="Country" id="Country" class="form-control">
        </div>
        <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" name="Phone" id="Phone" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
