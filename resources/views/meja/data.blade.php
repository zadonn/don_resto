<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Meja</th>
                                <th>Kapasitas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meja as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->no_meja }}</td>
                                <td>{{ $a->kapasitas }}</td>
                                <td>{{ $a->status }}</td>
                                <td>
                                    <form method="post" style="display: inline"
                                        action="{{ url(request()->segment(1) . '/' . $a->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" title="Delete" class="btn btn-danger delete-data">
                                            <i class="fas fa-trash danger"></i>
                                        </button>
                                    </form>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formMejaModal"
                                        data-mode="edit" data-id="{{ $a->id }}" data-no_meja="{{ $a->no_meja }}" data-kapasitas="{{ $a->kapasitas }}" data-status="{{ $a->status }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>