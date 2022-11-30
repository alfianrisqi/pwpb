<div class="az-content az-content-dashboard">

    <h1 style="margin: 25px;" class="h3 mb-0 text-gray-800">tambah faktur</h1>
    <br>
    <div class="container">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">tambah faktur</h6>
            </div>
            <div class="card-body">
                <form class="col-lg" method="post" action="<?= base_url('faktur/index') ?>">
                    <br>
                    <div class="form-group">
                        <label for="supplier">supplier</label>
                        <input type="text" class="form-control" id="supplier" name="supplier" placeholder="Supplier">
                    </div>
                    <div class="form-group">
                        <label for="no_faktur">No. faktur</label>
                        <input type="text" class="form-control" id="no_faktur" name="no_faktur" placeholder="Nomor faktur">
                    </div><br>
                    <!-- <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" placeholder="Tanggal">
                    </div> -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;" scope="col">No</th>
                                <th style="text-align: center;" scope="col">Obat</th>
                                <th style="text-align: center;" scope="col">Harga</th>
                                <th style="text-align: center;" scope="col">Jumlah</th>
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
                    <br><br>
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
</script>