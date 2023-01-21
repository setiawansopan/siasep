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
                <td class="text-dark text-semibold">Ruang</td>
                <td class="text-dark text-semibold">Properti</td>
                <td class="text-dark text-semibold">Laporan</td>
                <td class="text-dark text-semibold">Status</td>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach($laporan as $l) { ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><span class="title text-semibold"><?= $l['lap_nama']; ?></span></td>
                  <td><?= $l['ruang_nama']; ?></td>
                  <td><?= $l['properti_nama']; ?></td>
                  <td><?= $l['lap_keterangan']; ?></td>
                  <?php if ($l['lap_status'] == 'Terjadwal') $badge = 'badge-info';
                    if ($l['lap_status'] == 'Proses') $badge = 'badge-warning';
                    if ($l['lap_status'] == 'Selesai') $badge = 'badge-success';
                    if ($l['lap_status'] == 'Dibatalkan') $badge = 'badge-danger';
                    ?>
                  <td><a href="#" class="badge <?= $badge; ?>"><?= $l['lap_status']; ?></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>