<!-- Modal -->
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
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category')  is-invalid  @enderror"
                                id="category" name="category" wire:model='category' autocomplete="off" required>
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
                                    id="experience" name="experience" wire:model='experience' autocomplete="off"
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        wire:click='close'>Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
