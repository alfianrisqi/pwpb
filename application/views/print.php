<!--  -->
<!DOCTYPE html>
<html>

<head>
    <title>APOTIK AMANAH</title>
</head>

<body>
    <h4>APOTIK AMANAH</h4>
    <h4>JAKARTA TIMUR</h4>
    <h4>086546332456</h4>


    <table class="table">
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
    <br><br>

    <table border="2" cellspacing="0" cellpadding="10" style="width: 100%;">
        <tr>

            <th scope="col">NO</th>
            <th scope="col">nama obat</th>
            <th scope="col">harga/obat</th>
            <th scope="col">jumlah</th>
            <th scope="col">total harga</th>

        </tr>
        <?php $i = 1; ?>
        <?php $total = 0; ?>
        <?php $total_brg = 0; ?>
        <?php foreach ($detail as $pesanan) { ?>

            <tr align="center">
                <td scope="col"><?= $i++ ?></td>
                <td scope="col"><?= $pesanan['obat'] ?></td>
                <td scope="col">Rp.<?= number_format(($pesanan['harga'])) ?></td>
                <td scope="col"><?= $pesanan['jumlah'] ?></td>
                <td scope="col">RP.<?= number_format(($pesanan['total_harga'])) ?></td>
            </tr>
        <?php

            $total += $pesanan['total_harga'];
            $total_brg += $pesanan['jumlah'];
        }

        ?>
        <tr style="font-weight: bold;" align="center">
            <td colspan="3">total keseluruhan </td>

            <td><?= $total_brg; ?></td>
            <td>RP.<?= number_format($total); ?> </td>
        </tr>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>