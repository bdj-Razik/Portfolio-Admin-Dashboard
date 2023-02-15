<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-category-skill" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add category skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="form-row">


                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('category')  is-invalid  @enderror"
                                name="category" wire:model='category' autocomplete="off" required>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="basic-url">Experience<span class="text-danger">&nbsp;*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('experience')  is-invalid  @enderror"
                                    name="experience" wire:model='experience' autocomplete="off"
                                    aria-describedby="basic-addon1" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">years</span>
                                </div>
                                @error('experience')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                    </div>
                </div>

                <div class="modal-footer">
                    <x-button-modal.save />
                </div>

            </form>
        </div>
    </div>
</div>


{{-- Modal Update --}}
<div wire:ignore.self class="modal fade" id="update-category-skill" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update category skill<span class="text-danger">&nbsp;*</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="update">
                @csrf
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category')  is-invalid  @enderror"
                                name="category" wire:model='category' autocomplete="off" required>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 mb-3">
                            <label for="basic-url">Experience<span class="text-danger">&nbsp;*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('experience')  is-invalid  @enderror"
                                    name="experience" wire:model='experience' autocomplete="off"
                                    aria-describedby="basic-addon1" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">years</span>
                                </div>
                                @error('experience')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <x-button-modal.update />
                </div>
            </form>
        </div>
    </div>
</div>



{{-- Modal Destroy --}}
<div wire:ignore.self class="modal fade" id="destroy-category-skill" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete category skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="destroy">
                @csrf
                <div class="modal-body">


                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category')  is-invalid  @enderror"
                                name="category" wire:model='category' autocomplete="off" required readonly>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 mb-3">
                            <label for="basic-url">Experience</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('experience')  is-invalid  @enderror"
                                    name="experience" wire:model='experience' autocomplete="off"
                                    aria-describedby="basic-addon1" required readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">years</span>
                                </div>
                                @error('experience')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>





                        <div class="col-12">
                            <h6>Are you sure you want to delete</h6>
                        </div>



                    </div>



                </div>

                <div class="modal-footer">
                    <x-button-modal.delete />
                </div>
            </form>
        </div>
    </div>
</div>
