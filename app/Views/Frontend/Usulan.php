  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>

  <div class="col-12">
    <?php if (session()->getFlashdata('pesan')) :  ?>
      <div class="alert alert-success" role="alert">
        <strong>Sukses. </strong> <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Usulan Sarana Prasarana</h4>
      </div>
      <div class="card-body">
        <form class="forms-sample" method="post" action="\ussimpan">
          <div class="form-group">
            <label for="usul_nama">Nama</label>
            <input type="text" class="form-control" id="usul_nama" name="usul_nama">
          </div>
          <div class="form-group">
            <label for="usul_ruang_id">Lokasi Sarpra</label>
            <select class="form-control" id="usul_ruang_id" name="usul_ruang_id">
              <option value="">--Pilih--</option>
              <?php foreach ($usulan as $key) { ?>
                <option value="<?= $key['id']; ?>"><?= $key['ruang_nama']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group m-b-20">
            <label for="usul_teks">Deskripsi Usulan</label>
            <textarea class="form-control" id="usul_teks" rows="4" name="usul_teks"></textarea>
          </div>
          <button type="submit" class="btn btn-common mr-3">Kirim</button>
          <button class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>


  <!-- AKHIR DARI SECTION -->
  <?= $this->endSection(); ?>