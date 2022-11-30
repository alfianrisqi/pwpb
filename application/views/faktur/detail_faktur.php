<h1 style="margin: 20px;" class=" h3 mb-0 text-gray-800">riwayat</h1>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div style="margin-top:20px;" class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">detail fakur</h6>
        </div>
        <div class="card-body">

            <!-- Content Row -->
            <br>
            <div class="row">
                <br><br>
                <table style="margin-bottom:200px;" class="table">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">nama obat</th>
                            <th scope="col">harga</th>
                            <th scope="col">jumlah</th>
                            <th scope="col">total harga</th>
                            <th scope="col">no faktur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($detail as $dtl) : ?>
                            <tr>
                                <td scope="row"><?= $i++ ?></td>
                                <td scope="row"><?= $dtl['obat'] ?></td>
                                <td scope="row"><?= $dtl['harga'] ?></td>
                                <td scope="row"><?= $dtl['jumlah'] ?></td>
                                <td scope="row"><?= $dtl['total_harga'] ?></td>
                                <td scope="row"><?= $dtl['no_faktur'] ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->