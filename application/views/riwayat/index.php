  <h1 style="margin: 20px;" class=" h3 mb-0 text-gray-800">riwayat</h1>
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <?php echo $this->session->flashdata('message'); ?>

    <!-- Page Heading -->


    <div style="margin-top:20px;" class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">riwayat pemesanan</h6>
      </div>
      <div class="card-body">

        <!-- Content Row -->
        <br>
        <div class="row">
          <br><br>
          <table style="margin-bottom:200px;" class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($riwayat as $data) : ?>
                <tr>
                  <th scope="row"><?= $i++ ?></th>
                  <td><?= $data['nama_pasien'] ?></td>
                  <td><?= $data['alamat'] ?></td>
                  <td>0<?= $data['no_telp'] ?></td>
                  <td><?= $data['tanggal'] ?></td>
                  <td>
                    <a href="<?= base_url('cetak/index/' . $data['id_riwayat']); ?>" target="_blank" class="btn btn-success"><i class="fas fa-print"></i></a>

                    <a href="<?= base_url('detail_riwayat/index/' . $data['id_riwayat']) ?>">
                      <div class="btn btn-primary"><i class="fas fa-search"></i></div>
                    </a>
                  </td>
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