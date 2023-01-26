  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>

  <div class="col-12">
      <div class="card">
          <div class="card-header border-bottom">
              <h4 class="card-title">Tambah Laporan</h4>
          </div>
          <div class="card-body">
              <form class="forms-sample" method="post" action="/lpsimpan">
                  <?= csrf_field(); ?>
                  <div class="form-group">
                      <label for="lap_nama">Nama Pelapor</label>
                      <input type="text" class="form-control" id="lap_nama" placeholder="Nama" name="lap_nama">
                  </div>
                  <div class="form-group">
                      <label for="lap_ruang_id">Lokasi</label>
                      <select class="form-control" id="lap_ruang_id" name="lap_ruang_id">
                          <option value="">--Pilih--</option>
                          <?php foreach ($ruang as $r) { ?>
                              <option value="<?= $r['id']; ?>"><?= $r['ruang_nama']; ?></option>
                          <?php } ?>
                      </select>
                  </div>

                  <div class="form-group">
                      <label for="lap_properti_id">Properti Ruangan</label>
                      <select class="form-control" id="lap_properti_id" name="lap_properti_id">
                          <option value="">--Pilih--</option>
                          <?php foreach ($properti as $p) { ?>
                              <option value="<?= $p['id']; ?>"><?= $p['properti_nama']; ?></option>
                          <?php } ?>
                      </select>
                  </div>

                  <div class="form-group m-b-20">
                      <label for="lap_keterangan">Deskripsi Laporan</label>
                      <textarea class="form-control" id="lap_keterangan" rows="4" name="lap_keterangan"></textarea>
                  </div>

                  <div class="form-group">
                      <label>Foto</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label" for="inputGroupFile02">Pilih file</label>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-common mr-3">Kirim</button>
                  <a href="/laporan" class="btn btn-light">Batal</a>
              </form>
          </div>
      </div>
  </div>


  <!-- AKHIR DARI SECTION -->
  <?= $this->endSection(); ?>