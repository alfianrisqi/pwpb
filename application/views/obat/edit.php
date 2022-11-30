    <!-- Begin Page Content -->
    <!-- Page Heading -->
    <h1 style="margin: 25px;" class="h3 mb-0 text-gray-800">edit obat</h1>
    <br>

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
            </div>
            <div class="card-body">


                <!-- Content Row -->
                <div class="row">
                    <br>
                    <?php foreach ($obat as $obt) { ?>

                        <form style="margin-bottom:25px;" action="<?php echo base_url() . 'welcome/update/' . $obt->id_obat; ?>" method="POST" class=" col-lg-12">
                            <div class="form-group">
                                <label>Nama obat</label>
                                <input type="text0" name="obat" class="form-control" value="<?php echo $obt->obat ?>">
                            </div>
                            <div class="form-group">
                                <label>harga obat</label>
                                <input type="text" name="harga" class="form-control" value="<?php echo $obt->harga ?>">
                            </div>

                            <div class="form-group">
                                <label>jumlah obat</label>
                                <input type="text" name="stok" class="form-control" value="<?php echo $obt->stok ?>">
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