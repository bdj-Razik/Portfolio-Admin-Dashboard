<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-service' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    {{-- <th scope="col">Image</th> --}}
                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>

                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-service' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}' nameModal='destroy-service' />

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.service.modal')
</div>
