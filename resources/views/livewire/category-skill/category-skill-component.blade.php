<div>

    <div class="row">
        <div class="col-12 text-right my-2">
            <button type="button" class="btn btn-outline-success" data-toggle="modal"
                data-target="#add-category-skill"><span><i class="fa fa-plus" aria-hidden="true"></i>
                </span>&ensp;add</button>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->category }}</td>
                        <td>{{ $row->experience }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    @include('admin-panel.categoy-skill.modal')
</div>
