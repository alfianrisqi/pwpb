<div class="az-content az-content-dashboard">
    <h1 style="margin: 25px;" class="h3 mb-0 text-gray-800">tambah pasien</h1> <br>


    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">pasien</h6>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" class="col-lg" method="post" action="<?= base_url() . 'pasien/tambah_pasien' ?>">
                    <br>
                    <div class="form-group">
                        <label for="nama_pasien">nama pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" placeholder="pasien">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">nomor telepon</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="nomor telepon">
                    </div>

                    <button class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div><!-- az-content -->