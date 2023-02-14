<!-- Modal  Add-->
<div wire:ignore.self class="modal fade" id="add-skill" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">


                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">Skill<span
                                    class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('name')  is-invalid  @enderror"
                                name="name" wire:model='name' autocomplete="off" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category<span
                                    class="text-danger">&nbsp;*</span></label>
                            <select class="form-control @error('category')  is-invalid  @enderror" name="category "
                                wire:model='category' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 my-3">
                            <label for="level">Level <span id="rangeval">50 %</span><span class="text-danger">&nbsp;*</span></label>
                            <input type="range" class="custom-range @error('level')  is-invalid  @enderror"
                                min="10" max="90" step="10" id="level" name="level"
                                wire:model.defer='level' required onInput="$('#rangeval').html($(this).val())">
                            @error('level')
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
<div wire:ignore.self class="modal fade" id="update-skill" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form wire:submit.prevent="update">
                @csrf
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">Skill<span class="text-danger">&nbsp;*</span></label>
                            <input type="text" class="form-control @error('name')  is-invalid  @enderror"
                                  name="name" wire:model='name' autocomplete="off" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category<span class="text-danger">&nbsp;*</span></label>
                            <select class="form-control @error('category')  is-invalid  @enderror"
                                name="category " wire:model='category' autocomplete="off" required>
                                <option value="">Chosse ..</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 my-3">
                            <label for="level">Level <span id="u-rangeval">50 %</span><span class="text-danger">&nbsp;*</span></label>
                            <input type="range" class="custom-range @error('level')  is-invalid  @enderror"
                                min="10" max="90" step="10"   name="level"
                                wire:model.defer='level' required onInput="$('#u-rangeval').html($(this).val())">
                            @error('level')
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
<div wire:ignore.self class="modal fade" id="destroy-skill" tabindex="-1" role="dialog">
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
                            <label for="name" class="form-label">Skill</label>
                            <input type="text" class="form-control @error('name')  is-invalid  @enderror"
                                  name="name" wire:model='name' autocomplete="off" required
                                readonly>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control @error('category')  is-invalid  @enderror"
                                name="category " wire:model='category' autocomplete="off" required disabled>
                                <option value="">Chosse ..</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="col-12 mb-3">
                            <label for="level">Level <span id="u-rangeval">{{ $level }} %</span></label>
                            <input type="range" class="custom-range @error('level')  is-invalid  @enderror"
                                min="10" max="90" step="10"  name="level"
                                wire:model.defer='level' required disabled>
                            @error('level')
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
