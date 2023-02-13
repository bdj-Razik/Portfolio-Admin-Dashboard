<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-qualification" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Qualification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                id="title" name="title" wire:model='title' autocomplete="off" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="company_or_institue" class="form-label">Company / Institue</label>
                            <input type="text"
                                class="form-control @error('company_or_institue')  is-invalid  @enderror"
                                id="company_or_institue" name="company_or_institue" wire:model='company_or_institue'
                                autocomplete="off" required>
                            @error('company_or_institue')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control @error('location')  is-invalid  @enderror"
                                id="location" name="location" wire:model='location' autocomplete="off" required>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control @error('type')  is-invalid  @enderror" id="type"
                                name="type" wire:model='type' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control @error('start_date')  is-invalid  @enderror"
                                id="start_date" name="start_date" wire:model='start_date' autocomplete="off" required>
                            @error('start_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control @error('end_date')  is-invalid  @enderror"
                                id="end_date" name="end_date" wire:model='end_date' autocomplete="off" required>
                            @error('end_date')
                                <div class="invalid-feedback">
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
<div wire:ignore.self class="modal fade" id="update-qualification" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Qualification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="update">
                @csrf
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title')  is-invalid  @enderror"
                                id="title" name="title" wire:model='title' autocomplete="off" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="company_or_institue" class="form-label">Company / Institue</label>
                            <input type="text"
                                class="form-control @error('company_or_institue')  is-invalid  @enderror"
                                id="company_or_institue" name="company_or_institue" wire:model='company_or_institue'
                                autocomplete="off" required>
                            @error('company_or_institue')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control @error('location')  is-invalid  @enderror"
                                id="location" name="location" wire:model='location' autocomplete="off" required>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control @error('type')  is-invalid  @enderror" id="type"
                                name="type" wire:model='type' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control @error('start_date')  is-invalid  @enderror"
                                id="start_date" name="start_date" wire:model='start_date' autocomplete="off"
                                required>
                            @error('start_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control @error('end_date')  is-invalid  @enderror"
                                id="end_date" name="end_date" wire:model='end_date' autocomplete="off" required>
                            @error('end_date')
                                <div class="invalid-feedback">
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
<div wire:ignore.self class="modal fade" id="destroy-qualification" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete skill</h5>
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
                                id="title" name="title" wire:model='title' autocomplete="off" required readonly>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="company_or_institue" class="form-label">Company / Institue</label>
                            <input type="text"
                                class="form-control @error('company_or_institue')  is-invalid  @enderror"
                                id="company_or_institue" name="company_or_institue" wire:model='company_or_institue'
                                autocomplete="off" required readonly>
                            @error('company_or_institue')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control @error('location')  is-invalid  @enderror"
                                id="location" name="location" wire:model='location' autocomplete="off" required readonly>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control @error('type')  is-invalid  @enderror" id="type"
                                name="type" wire:model='type' autocomplete="off" required readonly>
                                <option value="">Chosse ..</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control @error('start_date')  is-invalid  @enderror"
                                id="start_date" name="start_date" wire:model='start_date' autocomplete="off"
                                required readonly>
                            @error('start_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control @error('end_date')  is-invalid  @enderror"
                                id="end_date" name="end_date" wire:model='end_date' autocomplete="off" required readonly>
                            @error('end_date')
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


