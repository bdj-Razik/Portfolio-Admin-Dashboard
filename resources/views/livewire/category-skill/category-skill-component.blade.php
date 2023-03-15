<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-category-skill' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Experience</th>
                    {{-- <th scope="col">Icone</th> --}}
                    <th scope="col" style="width:2%"></th>
                    <th scope="col" style="width:2%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->experience }}</td>

                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}'
                                nameModal='update-category-skill' />
                        </td>
                        <td>
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-category-skill' />

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.categoy-skill.modal')
</div>
