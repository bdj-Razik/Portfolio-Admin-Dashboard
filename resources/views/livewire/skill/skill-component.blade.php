<div>

    <x-layout.loader />


    <div class="row">
        <div class="col-12 text-right my-2">
            <x-button-modal.add nameModal='add-skill' />
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Level</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->level }} %</td>
                        <td>{{ $row->category->name }}</td>

                        <td>
                            <x-button-modal.update-action objectID='{{ $row->id }}' nameModal='update-skill' />
                            &nbsp;
                            <x-button-modal.delete-action objectID='{{ $row->id }}' nameModal='destroy-skill' />

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.skill.modal')
</div>
