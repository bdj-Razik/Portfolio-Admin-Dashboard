<div>

    <x-layout.loader target='getData' />


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
                    <th scope="col" style="width:2%"></th>
                    <th scope="col" style="width:2%"></th>
                    <th scope="col" style="width:2%"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($services as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td>
                            <x-button-modal.show-action objectID='{{ $row->id }}' nameModal='show-service' />
                        </td>
                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-service' />
                        </td>
                        <td>
                            <x-button-modal.delete-action objectID='{{ $row->id }}' nameModal='destroy-service' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>


    <x-layout.links-paginate>

        {{ $services->links() }}

    </x-layout.links-paginate>

    @include('admin-panel.service.modal')
</div>
