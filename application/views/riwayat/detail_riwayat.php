<h1 style="margin: 20px;" class=" h3 mb-0 text-gray-800">riwayat pemesanan</h1>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div style="margin-top:20px;" class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">detail riwayat</h6>
        </div>
        <div class="card-body">

            <table>
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td><?= $riwayat['nama_pasien'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $riwayat['alamat'] ?></td>
                </tr>
                <tr>
                    <td>no telepon</td>
                    <td>:</td>
                    <td><?= $riwayat['no_telp'] ?></td>
                </tr>
                <tr>
                    <td>tanggal pembelian</td>
                    <td>:</td>
                    <td><?= $riwayat['tanggal'] ?></td>
                </tr>
            </table>
            <br>
            <div class="row">
                <br><br>
                <table style="margin-bottom:50px;" class="table">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">nama obat</th>
                            <th scope="col">harga</th>
                            <th scope="col">jumlah</th>
                            <th scope="col">total harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php $total = 0; ?>
                        <?php $total_brg = 0; ?>
                        <?php foreach ($detail as $pesanan) { ?>
                            <tr>
                                <td scope="row"><?= $i ?></td>
                                <td scope="row"><?= $pesanan['obat'] ?></td>
                                <td scope="row">Rp.<?= number_format($pesanan['harga'])  ?></td>
                                <td scope="row"><?= $pesanan['jumlah'] ?></td>
                                <td scope="row">RP.<?= number_format($pesanan['total_harga'])  ?></td>
                            </tr>

                        <?php

                            $total += $pesanan['total_harga'];
                            $total_brg += $pesanan['jumlah'];
                        }

                        ?>
                    </tbody>
                    <tr style="font-weight: bold;" align="left">
                        <td align="center" colspan="3">total keseluruhan </td>

                        <td><?= $total_brg; ?></td>
                        <td>RP.<?= number_format($total); ?> </td>
                    </tr>
                </table>


            </div>

        </div>
    </div>



    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->