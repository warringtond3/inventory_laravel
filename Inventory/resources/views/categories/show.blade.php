@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <div class="form-group">
        <label for="CategoryName">Category Name</label>
        <input type="text" id="CategoryName" class="form-control" value="{{ $category->CategoryName }}" readonly>
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <textarea id="Description" class="form-control" readonly>{{ $category->Description }}</textarea>
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
</div>
@endsection
