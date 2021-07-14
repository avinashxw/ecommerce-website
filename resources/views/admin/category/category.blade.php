@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Categories</h2>
            <a href="addcategory">
                <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>add item</button>
            </a>
        </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="process"></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection