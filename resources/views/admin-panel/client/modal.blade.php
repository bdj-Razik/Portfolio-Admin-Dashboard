<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-client" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="full_name" class="form-label">Full name<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('full_name')  is-invalid  @enderror"
                                name="full_name" wire:model='full_name' autocomplete="off" required>
                            @error('full_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="email" class="form-control @error('email')  is-invalid  @enderror"
                                name="email" wire:model='email' autocomplete="off" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="tel" class="form-control @error('phone')  is-invalid  @enderror"
                                name="phone" wire:model='phone' autocomplete="off" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 my-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="photo">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('photo')  is-invalid  @enderror"
                                        aria-describedby="photo" name="photo" wire:model='photo'>
                                    <label class="custom-file-label" for="photo">Choose file (photo)</label>
                                </div>
                            </div>

                            <x-layout.loader target='photo' />

                            @error('photo')
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
<div wire:ignore.self class="modal fade" id="update-client" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="update">
                @csrf
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="full_name" class="form-label">Full name<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('full_name')  is-invalid  @enderror"
                                name="full_name" wire:model='full_name' autocomplete="off" required>
                            @error('full_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="email" class="form-control @error('email')  is-invalid  @enderror"
                                name="email" wire:model='email' autocomplete="off" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="tel" class="form-control @error('phone')  is-invalid  @enderror"
                                name="phone" wire:model='phone' autocomplete="off" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-12 my-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="photo">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('photo')  is-invalid  @enderror"
                                        aria-describedby="photo" name="photo" wire:model='photo'>
                                    <label class="custom-file-label" for="photo">Choose file (photo)</label>
                                </div>
                            </div>

                            <x-layout.loader target='photo' />

                            @error('photo')
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
<div wire:ignore.self class="modal fade" id="destroy-client" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="destroy">
                @csrf
                <div class="modal-body">


                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="full_name" class="form-label">Full name</label>
                            <input type="text" class="form-control @error('full_name')  is-invalid  @enderror"
                                name="full_name" wire:model='full_name' autocomplete="off" required readonly>
                            @error('full_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email')  is-invalid  @enderror"
                                name="email" wire:model='email' autocomplete="off" required readonly>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control @error('phone')  is-invalid  @enderror"
                                name="phone" wire:model='phone' autocomplete="off" required readonly>
                            @error('phone')
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
