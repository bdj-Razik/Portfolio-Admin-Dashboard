<!-- Modal  Show-->
<div wire:ignore.self class="modal fade" id="show-message" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click='close'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <label for="full_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="full_name" wire:model='full_name'
                            autocomplete="off" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Email</label>
                        <input type="text" class="form-control" name="title" wire:model='title' autocomplete="off"
                            readonly>
                    </div>



                    <div class="col-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" wire:model='title' autocomplete="off"
                            readonly>
                    </div>


                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" wire:model='description'
                            autocomplete="off" readonly>
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <x-button-modal.close />
                <x-button-modal.send messageID='{{ $messageID }}' />
            </div>
        </div>
    </div>
</div>


{{-- Modal Destroy --}}
<div wire:ignore.self class="modal fade" id="destroy-message" tabindex="-1" role="dialog">
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

                        <div class="col-md-6 mb-3">
                            <label for="full_name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="full_name" wire:model='full_name'
                                autocomplete="off" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Email</label>
                            <input type="text" class="form-control" name="title" wire:model='title'
                                autocomplete="off" readonly>
                        </div>



                        <div class="col-12 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" wire:model='title'
                                autocomplete="off" readonly>
                        </div>


                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" wire:model='description'
                                autocomplete="off" readonly>
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
