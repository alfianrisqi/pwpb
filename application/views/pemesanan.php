<div class="az-content az-content-dashboard">

    <h1 style="margin: 25px;" class="h3 mb-0 text-gray-800">pemesanan</h1>

    <div class="container">
        <div style="margin-top: 20px;" class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">pemesanan pasien</h6>
            </div>
            <div class="card-body">
                <form class="col-lg" method="post" action="<?= base_url('pemesanan/tambah') ?>">

                    <div class="form-group">
                        <label for="pasien">pasien:</label>
                        <select name="nama_pasien" id="nama-pasien" class="form-control" onchange="pasien()">
                            <option value="">Pilih pasien</option>
                            <?php foreach ($pasien as $psn) : ?>
                                <option value="<?= $psn['nama_pasien'] ?>" data-alamat="<?= $psn['alamat']; ?>" data-no-telp="<?= $psn['no_telp']; ?>"><?= $psn['nama_pasien'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_pemesanan">No. Pemesanan:</label>
                        <input type="text" id="no_pemesanan" name="no_pemesanan" class="form-control" placeholder="masukan nomor...">
                    </div>
                    <div class="form-group">
                        <label for="pasien">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pasien">No. Telepon:</label>
                        <input type="text" id="no-telp" name="no_telp" class="form-control" readonly>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">No</th>
                                <th scope="col" style="text-align: center;">Obat</th>
                                <th scope="col" style="text-align: center;">Harga</th>
                                <th scope="col" style="text-align: center;">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td>
                                    <select name="obat[]" id="obat-1" class="form-control" onchange="ambil_harga(1)">
                                        <option value="">Pilih Obat</option>
                                        <?php foreach ($obat as $obt) : ?>
                                            <option value="<?= $obt['id_obat'] ?>" data-harga="<?= $obt['harga']; ?>"><?= $obt['obat']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" id="harga-1" name="harga[]" class="form-control" readonly>
                                </td>
                                <td>
                                    <input type="text" id="stok-1" name="stok[]" class="form-control">
                                </td>
                            </tr>
                            <?php $no = 2; ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td>
                                    <select name="obat[]" id="obat-2" class="form-control" onchange="ambil_harga(2)">
                                        <option value="">Pilih Obat</option>
                                        <?php foreach ($obat as $obt) : ?>
                                            <option value="<?= $obt['id_obat'] ?>" data-harga="<?= $obt['harga']; ?>"><?= $obt['obat']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" id="harga-2" name="harga[]" class="form-control" readonly>
                                </td>
                                <td>
                                    <input type="text" id="stok-2" name="stok[]" class="form-control">
                                </td>
                            </tr>
                            <?php $no = 3; ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td>
                                    <select name="obat[]" id="obat-3" class="form-control" onchange="ambil_harga(3)">
                                        <option value="">Pilih Obat</option>
                                        <?php foreach ($obat as $obt) : ?>
                                            <option value="<?= $obt['id_obat'] ?>" data-harga="<?= $obt['harga']; ?>"><?= $obt['obat']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" id="harga-3" name="harga[]" class="form-control" readonly>
                                </td>
                                <td>
                                    <input type="text" id="stok-3" name="stok[]" class="form-control">
                                </td>
                            </tr>

                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div><!-- az-content -->

<script>
    $('#obat-1').on('change', function() {

    })

    function ambil_harga(id) {
        let harga = $(`#obat-${id} option:selected`).data('harga')
        $(`#harga-${id}`).val(harga)

    }
    $('#nama-pasien').on('change', function() {

    })

    function pasien(id) {
        let alamat = $(`#nama-pasien option:selected`).data('alamat')
        let no_telp = $(`#nama-pasien option:selected`).data('no-telp')


        $(`#alamat`).val(alamat)
        $(`#no-telp`).val(no_telp)

    }
</script>