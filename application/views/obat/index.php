<!-- Begin Page Content -->
<style>
    h1 {
        margin: 25px;

    }
</style>
<h1 class="h3 mb-0 text-gray-800">data obat</h1>

<div class="container-fluid">
    <div style="margin-top: 20px;" class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">obat</h6>
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <?php echo $this->session->flashdata('message'); ?>
            <div class="row">
                <br><br>
                <a href="<?= base_url('faktur_gudang/index/'); ?>" class=" btn btn-primary mb-3"><i><span></span>tambah obat </i></a>
                <table style="margin-bottom:25px;" class=" table table-hovers ">
                    <thead>
                        <tr>
                            <th scope=" col">no</th>
                            <th scope="col">obat</th>
                            <th scope="col">stok</th>
                            <th scope="col">harga</th>
                            <th scope="col">aksi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($obat as $obt) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?php echo $obt['obat']; ?></td>
                                <td><?php echo $obt['stok']; ?></td>
                                <td>Rp.<?php echo number_format($obt['harga']); ?></td>
                                <td>
                                    <?= anchor('welcome/delete/' . $obt['id_obat'], '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                    <?= anchor('welcome/edit/' . $obt['id_obat'], '<div class="btn btn-primary"><i class="fas fa-pen"></i></div>') ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>

        </div>
    </div>



    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->