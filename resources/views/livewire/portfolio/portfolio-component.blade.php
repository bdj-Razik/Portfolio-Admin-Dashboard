<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-portfolio' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Client</th>
                    <th scope="col">Period</th>
                    <th scope="col">Link</th>
                    {{-- <th scope="col">Image</th> --}}
                    <th scope="col">Description</th>
                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->client }}</td>
                        <td>{{ $row->period }}</td>
                        <td>{{ $row->link }}</td>
                        {{-- <td>{{ $row->image }}</td> --}}
                        <td>{{ $row->description }}</td>
                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-portfolio' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-portfolio' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.portfolio.modal')
</div>
