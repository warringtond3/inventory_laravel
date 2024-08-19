@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->CategoryID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="CategoryName">Category Name</label>
            <input type="text" name="CategoryName" id="CategoryName" class="form-control" value="{{ $category->CategoryName }}" required>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea name="Description" id="Description" class="form-control">{{ $category->Description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
