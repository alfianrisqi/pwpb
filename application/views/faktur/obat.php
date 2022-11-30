<?php
$conn = mysqli_connect("localhost", "root", "", "apotik_shamlong");
$query = ("SELECT * FROM faktur");
$result = mysqli_query($conn, $query);
?>

<!-- Page Heading -->
<h1 style="margin: 20px;" class="h3 mb-0 text-gray-800">faktur obat</h1>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php echo $this->session->flashdata('message'); ?>


    <div style="margin-top:20px;" class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">faktur</h6>
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <br>
            <a style="margin-top:-20px;" href="<?= base_url('faktur/index'); ?>" class=" btn btn-primary mb-3"><i><span></span>tambah faktur</i></a>
            <div class="row" style=" margin-top: 10px; ">
                <br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">suplayer</th>
                            <th scope="col">no faktur</th>
                            <th scope="col">tanggal pembelian</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>

                    <?php $i = 1; ?>
                    <?php while ($faktur = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?php echo $faktur['supplier']; ?></td>
                            <td><?php echo $faktur['no_faktur']; ?></td>
                            <td><?php echo $faktur['tanggal_pembelian']; ?></td>
                            <td>
                                <?= anchor('faktur/delete/' . $faktur['id'], '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                <?= anchor('faktur/detail_faktur/index' . $faktur['no_faktur'], '<div class="btn btn-primary"><i class="fas fa-search"></i></div>') ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>


        </div>
    </div>


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->