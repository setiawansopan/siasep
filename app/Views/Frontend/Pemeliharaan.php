  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Jadwal Pemeliharaan</h4>
          <div class="selected float-right">
            <select class="custom-select">
              <option selected="selected" value="0">Terjadwal</option>
              <option value="1">Proses</option>
              <option value="2">Selesai</option>
            </select>
          </div>
        </div>
        <div class="table-overflow">
          <table class="table table-lg">
            <thead>
              <tr>
                <td class="text-dark text-semibold">No</td>
                <td class="text-dark text-semibold">Nama Tempat</td>
                <td class="text-dark text-semibold">Tanggal</td>
                <td class="text-dark text-semibold">Kegiatan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              // dd($pemeliharaan);
              foreach ($pemeliharaan as $p) { ?>
                <tr>
                  <td><span class="title text-semibold"><?= $i++; ?></span></td>
                  <td>Ruang <?= $p['ruang_nama']; ?></td>
                  <td><?= $p['plh_tanggal_mulai']; ?></td>
                  <td><?= $p['plh_kegiatan']; ?></td>
                  <td>
                    <?php if ($p['plh_status'] == 'Terjadwal') $badge = 'badge-info';
                    if ($p['plh_status'] == 'Proses') $badge = 'badge-warning';
                    if ($p['plh_status'] == 'Selesai') $badge = 'badge-success';
                    if ($p['plh_status'] == 'Dibatalkan') $badge = 'badge-danger';
                    ?>
                    <a href="#" class="badge <?= $badge; ?>"><?= $p['plh_status']; ?></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>