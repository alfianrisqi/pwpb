<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">data pemesanan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->

    <div style="margin-bottom: 200px;" class="row">
        <h1 style="margin-top: 20px; " class="h3 mb-0 text-gray  -800">data pemesanan</h1>
        <?php echo $this->session->flashdata('message'); ?>

        <form style="margin-top: 25px;" action="<?= base_url('welcome/tambah_pasien'); ?>" method="POST" class=" col-lg-12">
            <div class="form-group">
                <label>nama pasien:</label>
                <input type="text" name="nama_pasien" class="form-control" placeholder="masukan nama pasien">
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="masukan nama alamat">
            </div>
            <div class="form-group">
                <label>nomor telepon:</label>
                <input type="text" name="no_telp" class="form-control" placeholder="masukan nomor telepon">
            </div>
            <div class="form-group">
                <label>tanggal pembelian:</label>
                <input type="date" name="tgl_pembelian" class="form-control">
            </div>
            <br>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col" style="color:aliceblue;">No</th>
                        <th scope="col" style="color:aliceblue;">Obat</th>
                        <th scope="col" style="color:aliceblue;">Harga</th>
                        <th scope="col" style="color:aliceblue;">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td>
                            <select name="nama_obat[]" id="id_obat" class="form-control" onchange="ambil_harga(1)">
                                <option value="">Pilih Obat</option>
                                <?php foreach ($obat as $obt) : ?>
                                    <option value="<?= $obt['id'] ?>" data-harga="<?= $obt['harga_obat']; ?>"><?= $obt['nama_obat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type="text" id="harga-1" name="harga_obat[]" class="form-control" readonly>
                        </td>
                        <td>
                            <input type="text" id="jumlah-1" name="jumlah_obat[]" class="form-control">
                        </td>
                    </tr>
                    <?php $no++; ?>

                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    </div>





    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->