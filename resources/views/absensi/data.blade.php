<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Tanggal Masuk</th>
                                <th>Waktu Masuk</th>
                                <th>Status</th>
                                <th>Waktu Selesai Kerja</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absensi as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->namaKaryawan }}</td>
                                <td>{{ $a->tanggalMasuk }}</td>
                                <td>{{ $a->waktuMasuk }}</td>
                                <td>{{ $a->status }}</td>
                                <td>{{ $a->waktuSelesaiKerja }}</td>
                                <td>
                                    <form method="post" style="display: inline"
                                        action="{{ url(request()->segment(1) . '/' . $a->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" title="Delete" class="btn btn-danger delete-data">
                                            <i class="fas fa-trash danger"></i>
                                        </button>
                                    </form>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formAbsensiModal"
                                        data-mode="edit" data-id="{{ $a->id }}" data-namaKaryawan="{{ $a->namaKaryawan }}" data-tanggalMasuk="{{ $a->tanggalMasuk }}" data-waktuMasuk="{{ $a->waktuMasuk }}" data-status="{{ $a->status }}" data-waktuKeluar="{{ $a->waktuKeluar }}">
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