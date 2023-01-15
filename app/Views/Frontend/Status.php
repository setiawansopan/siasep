  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sarpra Status</h4>
          <div class="selected float-right">
            <select class="custom-select">
              <option selected="selected" value="0">Kelas</option>
              <option value="1">Toilet</option>
              <option value="2">Laboratorium</option>
              <option value="3">Masjid</option>
            </select>
          </div>
        </div>
        <div class="table-overflow">
          <table class="table table-lg">
            <thead>
              <tr>
                <td class="text-dark text-semibold">No</td>
                <td class="text-dark text-semibold">Jenis</td>
                <td class="text-dark text-semibold">Nama</td>
                <td class="text-dark text-semibold">Laporan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="title text-semibold">1</span></td>
                <td><span class="title text-semibold">Kelas</span></td>
                <td>Kelas 105</td>
                <td>Kipas angin rusak tidak jalan</td>
                <td><a href="#" class="badge badge-danger">Perbaikan</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td><span class="title text-semibold">Toilet</span></td>
                <td>Kamar Mandi</td>
                <td>-</td>
                <td><a href="#" class="badge badge-success">Baik</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td><span class="title text-semibold">Ruang Guru</span></td>
                <td>Ruang Guru</td>
                <td>Lampu ruang guru mati di sisi utara</td>
                <td><a href="#" class="badge badge-info">Rusak</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td><span class="title text-semibold">Ruang Pimpinan</span></td>
                <td>Ruang Kepala Sekolah</td>
                <td>-</td>
                <td><a href="#" class="badge badge-success">Baik</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>