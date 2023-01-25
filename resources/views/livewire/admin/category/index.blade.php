@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Category
            <a href="{{url('admin/category/create')}}" class="btn btn-primary float-end">Add Category</a>
        </h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->status == '1' ? 'Good':'Bad'}}</td>
                    <td><img src="{{asset('uploads/category/'.$category->image)}}" alt=""></td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection