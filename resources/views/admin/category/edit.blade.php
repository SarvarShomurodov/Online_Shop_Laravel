@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Add Category
            <a href="{{url('admin/category/create')}}" class="btn btn-primary float-end">Back</a>
        </h2>
    </div>
    <div class="card-body">
        <form action="{{url('admin/category/'.$category->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label>Name</label>
                <input type="text" value="{{$category->name}}" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label>Slug</label>
                <input type="text" value="{{$category->slug}}" class="form-control" name="slug">
            </div>
            <div class="col-md-12">
                <label>Description</label>
                <textarea type="text" class="form-control" name="description">{{$category->description}}</textarea>
            </div>
            <div class="col-md-6">
                <label>Image</label>
                <input type="file" class="form-control"  name="image">
                <img src="{{asset('uploads/category/'.$category->image)}}" width="60">
            </div>
            <div class="col-md-6 mb-3">
                <label>Status</label>
                <input type="checkbox" {{$category->status == '1' ? 'check':''}}  name="status">
            </div>
            <div class="col-md-12">
                <label>Meta Title</label>
                <input type="text" value="{{$category->meta_title}}" class="form-control" name="meta_title">
            </div>
            <div class="col-md-12">
                <label>Meta Keyboard</label>
                <textarea type="text" class="form-control" name="meta_keyboard">{{$category->meta_keyboard}}</textarea>
            </div>
            <div class="col-md-12">
                <label>Meta Description</label>
                <textarea type="text" class="form-control" name="meta_description">{{$category->meta_description}}</textarea>
            </div>
            <div class="col-md-12">
                <br>
               <button class="btn btn-primary float-end">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection