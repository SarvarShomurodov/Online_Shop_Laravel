<div>
    @include('livewire.admin.brand.model-form')
    <div class="card">
        <div class="card-header">
            <h2>Brands 
                <a href="" data-bs-toggle="modal" data-bs-target="#addBrandModel" class="btn btn-primary float-end">Add Brand</a>
            </h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($brands as $brand)
                    <tr>
                        <th scope="row">{{$brand->id}}</th>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->slug}}</td>
                        <td>{{$brand->status == '1' ? 'Good':'Bad'}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>  
                    @empty
                        
                    @endforelse
                </tbody>
              </table>
              {{$brands->links()}}
        </div>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('closeModal', event=> {
       $('#addBrandModel').modal('hide')
    })
</script>
@endpush