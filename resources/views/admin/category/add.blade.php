@extends('admin/layout')

@section('container')
<div class="row">
    <h3 class="mb-10">Create Category</h3>
</div>
<div class="row">
    <a href="category"><button class="btn btn-success">Back</button></a>
</div>
<div class="row">
<form action="" method="post" style="width: 100%; padding-top: 20px;">
    @csrf
    <div class="mb-3">
        <label for="categoryname" class="form-label">Name</label>
        <input type="email" class="form-control" placeholder="XYZ..">
    </div>
    <div class="mb-3">
        <label for="categorydescription" class="form-label">Description</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
</div>
@endsection