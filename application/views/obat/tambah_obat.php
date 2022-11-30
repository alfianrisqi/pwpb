<div class="az-content az-content-dashboard">
    <h1 style="margin: 25px;" class="h3 mb-0 text-gray-800">tambah obat</h1> <br>
    <div class="container">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">tambah obat</h6>
            </div>
            <div class="card-body">

                <form enctype="multipart/form-data" class="col-lg" method="post" action="<?= base_url() . 'faktur_gudang/tambah_obat' ?>">

                    <br>
                    <div class="form-group">
                        <label for="nama_obat">nama obat:</label>
                        <input type="text" class="form-control" name="obat" placeholder="nama obat">
                    </div>
                    <div class="form-group">
                        <label for="stok">stok</label>
                        <input type="text" class="form-control" name="stok" placeholder="stok">
                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="harga">
                    </div>

                    <button class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div><!-- az-content -->