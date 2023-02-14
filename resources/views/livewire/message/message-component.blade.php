<div>

    <x-layout.loader />



    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>

                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            <a class="text-primary">
                                <i class="fa-regular fa-eye" title="Send"></i>
                            </a>
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-portfolio' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.client.modal')
</div>
