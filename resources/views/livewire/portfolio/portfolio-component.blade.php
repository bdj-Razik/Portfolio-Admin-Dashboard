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
                    <th scope="col">Price</th>
                    <th scope="col">Link</th>
                    <th scope="col">Description</th>
                    <th scope="col" style="width:2%"></th>
                    <th scope="col" style="width:2%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolios as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->client->full_name }}</td>
                        <td>{{ $row->period }}</td>
                        <td>{{ number_format($row->price) }} $</td>
                        <td>{{ $row->link }}</td>
                        {{-- <td>{{ $row->image }}</td> --}}
                        <td>{{ $row->description }}</td>
                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-portfolio' />
                        </td>
                        <td>
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-portfolio' />
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <x-layout.links-paginate>

        {{ $portfolios->links() }}

    </x-layout.links-paginate>


    @include('admin-panel.portfolio.modal')
</div>
