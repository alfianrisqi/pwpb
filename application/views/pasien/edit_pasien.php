    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">edit pasien</h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
            </div>
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">
                    <br>
                    <?php foreach ($pasien as $psn) { ?>

                        <form style="margin-bottom:25px;" action=" <?php echo base_url() . 'pasien/update/' . $psn->id_pasien; ?>" method="POST" class=" col-lg-12">
                            <div class="form-group">
                                <label>Nama obat</label>
                                <input type="text0" name="nama_pasien" class="form-control" value="<?php echo $psn->nama_pasien ?>">
                            </div>
                            <div class="form-group">
                                <label>harga obat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $psn->alamat ?>">
                            </div>

                            <div class="form-group">
                                <label>no telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="<?php echo $psn->no_telp ?>">
                            </div>
                            <button type="reset" class="btn btn-primary">reset</button>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                    <?php  } ?>
                </div>

            </div>
        </div>




        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->