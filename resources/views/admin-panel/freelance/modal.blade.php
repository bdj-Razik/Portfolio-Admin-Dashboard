<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-freelance" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add platforme (Freelance)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                name="title" wire:model='title' autocomplete="off" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="url" class="form-label">Url<span class="text-danger">&nbsp;*</span></label>
                            <input type="tel" class="form-control @error('url')  is-invalid  @enderror"
                                name="url" wire:model='url' autocomplete="off" required>
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 my-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('image')  is-invalid  @enderror"
                                        aria-describedby="image" name="image" wire:model='image'>
                                    <label class="custom-file-label" for="image">Choose file (image)</label>
                                </div>
                            </div>

                            <x-layout.loader target='image' />

                            @error('image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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
<div wire:ignore.self class="modal fade" id="update-freelance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update platforme (Freelance)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="update">
                @csrf
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                name="title" wire:model='title' autocomplete="off" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="url" class="form-label">Url<span class="text-danger">&nbsp;*</span></label>
                            <input type="tel" class="form-control @error('url')  is-invalid  @enderror"
                                name="url" wire:model='url' autocomplete="off" required>
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 my-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('image')  is-invalid  @enderror"
                                        aria-describedby="image" name="image" wire:model='image'>
                                    <label class="custom-file-label" for="image">Choose file (image)</label>
                                </div>
                            </div>

                            <x-layout.loader target='image' />

                            @error('image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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
<div wire:ignore.self class="modal fade" id="destroy-freelance" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete platforme (Freelance)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="destroy">
                @csrf
                <div class="modal-body">


                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                name="title" wire:model='title' autocomplete="off" required readonly>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="url" class="form-label">Url<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="tel" class="form-control @error('url')  is-invalid  @enderror"
                                name="url" wire:model='url' autocomplete="off" required readonly>
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
