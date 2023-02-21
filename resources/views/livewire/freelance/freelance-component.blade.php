<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-freelance' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Url</th>
                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($freelances as $row)
                    <tr>

                        <th>{{ $loop->iteration }}</th>
                        <th> <img class="rounded-circle" alt="avatar1"
                                src="{{ 'img-freelance/' . ($row->image ? $row->image : 'photo-client.png') }}"
                                style="width: 30px" /></th>
                        <td>{{ $row->title }}</td>
                        <td>
                            <a   class="badge badge-info" href="{{ $row->url }}" target="_blank" rel="noopener noreferrer">{{ $row->url }}</a>
                        </td>
                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-freelance' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-freelance' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <x-layout.links-paginate>

        {{ $freelances->links() }}

    </x-layout.links-paginate>


    @include('admin-panel.freelance.modal')
</div>
