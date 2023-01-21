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
              <?php $no = 1;  foreach($ijin as $i) { ?>
                <tr>
                  <td><span class="title text-semibold"><?= $no++; ?></span></td>
                  <td><span class="title text-semibold"><?= $i['ijn_pengguna']; ?></span></td>
                  <td><?= $i['ruang_nama']; ?></td>
                  <td><?= $i['ijn_tanggal']; ?></td>
                  <td><?= $i['ijn_mulai']; ?> s/d <?= $i['ijn_selesai']; ?> </td>
                  <td><?= $i['ijn_kegiatan']; ?></td>

                  <?php if ($i['ijn_status'] == 'Terjadwal') $badge = 'badge-info';
                    if ($i['ijn_status'] == 'Selesai') $badge = 'badge-success';
                    ?>

                  <td><a href="#" class="badge <?= $badge; ?>"><?= $i['ijn_status']; ?></a></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- AKHIR DARI SECTION -->
    <?= $this->endSection(); ?>