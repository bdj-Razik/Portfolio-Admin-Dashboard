<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-portfolio" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add portfolio</h5>
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



                        <div class="col-md-6 mb-3">
                            <label for="client" class="form-label">client<span
                                    class="text-danger">&nbsp;*</span></label>
                            <select class="form-control @error('client')  is-invalid  @enderror" name="client "
                                wire:model='client' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($clients as $row)
                                    <option value="{{ $row->id }}">{{ $row->full_name }}</option>
                                @endforeach
                            </select>
                            @error('client')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>




                        <div class="col-md-6 mb-3">
                            <label for="link" class="form-label">Link<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('link')  is-invalid  @enderror"
                                name="link" wire:model='link' autocomplete="off" required>
                            @error('link')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="basic-url">Period<span class="text-danger">&nbsp;*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('period')  is-invalid  @enderror"
                                    name="period" wire:model='period' autocomplete="off"
                                    aria-describedby="basic-addon1" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Month</span>
                                </div>
                                @error('period')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-12 mb-3">

                            <label for="feedback">Feedback<span class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control  @error('experience')  is-invalid  @enderror" rows="5" name="feedback"
                                wire:model='feedback' autocomplete="off" aria-describedby="basic-addon1" required></textarea>
                            @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror


                        </div>



                        <div class="col-12 mb-3">

                            <label for="description">Description<span class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control  @error('experience')  is-invalid  @enderror" rows="5" name="description"
                                wire:model='description' autocomplete="off" aria-describedby="basic-addon1" required></textarea>
                            @error('description')
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
                                    <label class="custom-file-label" for="image">Choose file (Image)</label>
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
<div wire:ignore.self class="modal fade" id="update-portfolio" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update portfolio</h5>
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


                        <div class="col-md-6 mb-3">
                            <label for="client" class="form-label">client<span
                                    class="text-danger">&nbsp;*</span></label>
                            <select class="form-control @error('client')  is-invalid  @enderror" name="client "
                                wire:model='client' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($clients as $row)
                                    <option value="{{ $row->id }}">{{ $row->full_name }}</option>
                                @endforeach
                            </select>
                            @error('client')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>




                        <div class="col-md-6 mb-3">
                            <label for="link" class="form-label">Link<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('link')  is-invalid  @enderror"
                                name="link" wire:model='link' autocomplete="off" required>
                            @error('link')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="basic-url">Period<span class="text-danger">&nbsp;*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('period')  is-invalid  @enderror"
                                    name="period" wire:model='period' autocomplete="off"
                                    aria-describedby="basic-addon1" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Month</span>
                                </div>
                                @error('period')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>


                        <div class="col-12 mb-3">

                            <label for="feedback">Feedback<span class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control  @error('experience')  is-invalid  @enderror" rows="5" name="feedback"
                                wire:model='feedback' autocomplete="off" aria-describedby="basic-addon1" required></textarea>
                            @error('feedback')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror


                        </div>




                        <div class="col-12 mb-3">

                            <label for="description">Description<span class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control  @error('experience')  is-invalid  @enderror" rows="5" name="description"
                                wire:model='description' autocomplete="off" aria-describedby="basic-addon1" required></textarea>
                            @error('description')
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
                                    <label class="custom-file-label" for="image">Choose file (Image)</label>
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
<div wire:ignore.self class="modal fade" id="destroy-portfolio" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="destroy">
                @csrf
                <div class="modal-body">


                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                name="title" wire:model='title' autocomplete="off" required readonly>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="client" class="form-label">client</label>
                            <select class="form-control @error('client')  is-invalid  @enderror" name="client "
                                wire:model='client' autocomplete="off" required readonly>
                                <option value="">Chosse ..</option>
                                @foreach ($clients as $row)
                                    <option value="{{ $row->id }}">{{ $row->full_name }}</option>
                                @endforeach
                            </select>
                            @error('client')
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
