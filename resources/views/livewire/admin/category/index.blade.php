<div>
    <div class="row">
      <div class="col-md-12">

        <div class="alert alert-success">{{ session('message') }}</div>

        <div class="card">
          <div class="card-header">
            <h3>Category 
              <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end text-white">Add Category</a>
              </h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category )
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success text-white">Edit</a>
                                <a href="#" wire:click="deleteCategory({{ $category->id }})" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $categories->links() }}
            </div>
          </div>
        </div>
      </div>
  </div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
        <form wire:submit.prevent="destroyCategory">

            <div class="modal-body">
                <h3>Are you sure you want to delete!</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary text-white">Yes</button>
            </div>
        </form>

    </div>
  </div>
</div>

</div>

@push('script')
<script>
    window.addEventListener('close-modal', event => {
      $('#deleteModal').modal('hide');
    });
</script>  
@endpush