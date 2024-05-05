<div class="modal fade" id="formMenuModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="menu">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputMenu">Nama Menu</label>
                                <input type="text" class="form-control" id="nama_menu" value="" name="nama_menu">
                                <label for="exampleInputMenu">Harga</label>
                                <input type="number" class="form-control" id="harga" value=""
                                    name="harga">
                                    <label for="exampleInputMenu">jenis_id</label>
                                <input type="string" class="form-control" id="jenis_id" value=""
                                    name="jenis_id">
                                <label for="exampleInputMenu">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
