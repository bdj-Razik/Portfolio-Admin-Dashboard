<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-type-qualification' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>

                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}'
                                nameModal='update-type-qualification' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-type-qualification' />

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.type-qualification.modal')
</div>
