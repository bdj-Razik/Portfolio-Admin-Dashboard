<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-qualification' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Company / Institue</th>
                    <th scope="col">Period</th>
                    <th scope="col">Location</th>
                    <th scope="col">Type</th>

                    <th scope="col" style="width:10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($qualifications as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->company_or_institue }} %</td>


                        <td>{{ $row->start_date . '-' . $row->end_date }}</td>
                        <td>{{ $row->location }}</td>

                        <td>{{ $row->type->name }}</td>

                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}'
                                nameModal='update-qualification' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}'
                                nameModal='destroy-qualification' />

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.qualification.modal')
</div>
