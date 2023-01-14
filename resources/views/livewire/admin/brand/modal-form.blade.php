
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addBrandModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit.prevent="storeBrand">
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Brand Name</label>
                                <input type="text" wire:model.defer="name" class="form-control">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Brand Slug</label>
                                <input type="text" wire:model.defer="slug" class="form-control">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="checkbox" wire:model.defer="status" /> Checked=Hidden, Un-Checked=Visible
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Brand Update Modal -->
    <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="updateBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateBrandModalLabel">Update Modal title</h1>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div wire:loading>
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                <div wire:loading.remove>
                    <form wire:submit.prevent="updateBrand">
                        <div class="modal-body">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Brand Name</label>
                                    <input type="text" wire:model.defer="name" class="form-control">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Brand Slug</label>
                                    <input type="text" wire:model.defer="slug" class="form-control">
                                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Status</label>
                                    <input type="checkbox" wire:model.defer="status" /> Checked=Hidden, Un-Checked=Visible
                                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary text-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
