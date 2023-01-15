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
                <td class="text-dark text-semibold">Nama</td>
                <td class="text-dark text-semibold">Lokasi</td>
                <td class="text-dark text-semibold">Laporan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="list-media">
                    <div class="list-item">
                      <div class="media-img">
                        <a class="btn btn-circle btn-info text-white">AI</a>
                      </div>
                      <div class="info">
                        <span class="title text-semibold">Arfinda Ilmania</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Kelas 105</td>
                <td>Kipas angin rusak tidak jalan</td>
                <td><a href="#" class="badge badge-danger">Processing</a></td>
              </tr>
              <tr>
                <td>
                  <div class="list-media">
                    <div class="list-item">
                      <div class="media-img">
                        <a class="btn btn-circle btn-danger text-white">DK</a>
                      </div>
                      <div class="info">
                        <span class="title text-semibold">Dyah Kartika</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Kamar Mandi</td>
                <td>Kran rusak tidak bisa keluar air</td>
                <td><a href="#" class="badge badge-success">Done</a></td>
              </tr>
              <tr>
                <td>
                  <div class="list-media">
                    <div class="list-item">
                      <div class="media-img">
                        <a class="btn btn-circle btn-success text-white">SL</a>
                      </div>
                      <div class="info">
                        <span class="title text-semibold">Slamet Marmono</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Ruang Guru</td>
                <td>Lampu ruang guru mati di sisi utara</td>
                <td><a href="#" class="badge badge-info">On-hold</a></td>
              </tr>
              <tr>
                <td>
                  <div class="list-media">
                    <div class="list-item">
                      <div class="media-img">
                        <a class="btn btn-circle btn-primary text-white">UD</a>
                      </div>
                      <div class="info">
                        <span class="title text-semibold">Jumadi</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Ruang Kepala Sekolah</td>
                <td>Kamar mandi rusak mampet</td>
                <td><a href="#" class="badge badge-success">Done</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>