<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-client' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>

                    <th scope="col" style="width:2%"></th>
                    <th scope="col" style="width:2%"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $row)
                    <tr>

                        <th>{{ $loop->iteration }}</th>
                        <th> <img class="rounded-circle" alt="avatar1"
                                src="{{ 'img-client/' . ($row->photo ? $row->photo : 'photo-client.png') }}"
                                style="width: 30px" /></th>
                        <td>{{ $row->full_name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-client' />
                        </td>
                        <td>
                            <x-button-modal.delete-action objectID='{{ $row->id }}' nameModal='destroy-client' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <x-layout.links-paginate>

        {{ $clients->links() }}

    </x-layout.links-paginate>


    @include('admin-panel.client.modal')
</div>
