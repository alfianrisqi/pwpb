<!-- page heading -->

<h1 style="margin: 20px;" class="h3 mb-0 text-gray-800">data pasien</h1>
<!-- content -->
<div class="container-fluid">
    <?php echo $this->session->flashdata('message'); ?>

    <div style="margin-top:20px" class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">pasien</h6>
        </div>
        <div class="card-body">


            <!-- Content Row -->

            <div class="row">
                <br><br>

                <a href="<?= base_url('pasien/index2'); ?>" class=" btn btn-primary mb-3"><i><span></span>Tambah Pasien </i></a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">nama pasien</th>
                            <th scope="col">alamat</th>
                            <th scope="col">nomor telepon</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>


                    <?php $i = 1; ?>
                    <?php foreach ($pasien as $psn) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td> <?php echo $psn['nama_pasien']; ?> </td>
                            <td> <?php echo $psn['alamat']; ?></td>
                            <td>0<?php echo $psn['no_telp']; ?></td>

                            <td>
                                <?= anchor('pasien/delete/' . $psn['id_pasien'], '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                <?= anchor('pasien/edit_pasien/' . $psn['id_pasien'], '<div class="btn btn-primary"><i class="fas fa-pen"></i></div>') ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->