  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Peminjaman Tempat</h4>
          <div class="float-right">
            <a href="" class="btn btn-info">Tambah</a>
          </div>
        </div>
        <div class="table-overflow">
          <table class="table table-lg">
            <thead>
              <tr>
                <td class="text-dark text-semibold">No</td>
                <td class="text-dark text-semibold">Divisi</td>
                <td class="text-dark text-semibold">Nama Tempat</td>
                <td class="text-dark text-semibold">Tanggal</td>
                <td class="text-dark text-semibold">Waktu</td>
                <td class="text-dark text-semibold">Kegiatan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                  <td><span class="title text-semibold"><?= $i; ?></span></td>
                  <td><span class="title text-semibold">MPK</span></td>
                  <td>Kelas 105</td>
                  <td>15 Januari 2023</td>
                  <td>15.30 s/d 16.30 </td>
                  <td>Rapat rutin</td>
                  <td><a href="#" class="badge badge-success">Terjadwal</a></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>