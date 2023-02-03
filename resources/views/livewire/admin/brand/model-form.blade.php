<div>
  <div wire:ignore class="modal fade" id="addBrandModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeBrands()">
          <div class="modal-body">
              <div class="mb-3">
                <label for="">Name</label>
                <input wire:model.defer="name" class="form-control" type="text">
              </div>
              <div class="mb-3">
                <label for="">Slug</label>
                <input wire:model.defer="slug" class="form-control"  type="text">
              </div>
              <div class="mb-3">
                <label for="">Status</label><br>
                <input wire:model.defer="status" type="checkbox">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
