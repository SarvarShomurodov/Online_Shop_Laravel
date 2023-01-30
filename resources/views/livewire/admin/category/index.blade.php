<div>
    <div wire:ignore class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent = "destroyCategory" >
                <div class="modal-body">
                    <h6>Are you sure delete category?</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
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
                            <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <a href="" wire:click = "deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    })
</script>
@endpush