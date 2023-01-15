  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Laporan Kerusakan</h4>
          <div class="float-right"><a href="" class="btn btn-info">Tambah</a></div>


        </div>
        <div class="table-overflow">
          <table class="table table-lg">
            <thead>
              <tr>
                <td class="text-dark text-semibold">No</td>
                <td class="text-dark text-semibold">Nama</td>
                <td class="text-dark text-semibold">Lokasi</td>
                <td class="text-dark text-semibold">Laporan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 1; $i <= 8; $i++) { ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><span class="title text-semibold">Arfinda Ilmania</span></td>
                  <td>Kelas 105</td>
                  <td>Kipas angin rusak tidak jalan</td>
                  <td><a href="#" class="badge badge-danger">Processing</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>