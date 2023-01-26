  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>

  <div class="col-12">
  <?php if (empty(session()->getFlashdata('pesan'))) :  ?>
        <div class="alert alert-warning" role="alert">
          <strong>Perhatian. </strong> Pengajuan izin kegiatan siswa tanpa persetujuan bidang kesiswaan tidak akan diaprove. 
        </div>
      <?php endif; ?>
      <div class="card">
          <div class="card-header border-bottom">
              <h4 class="card-title">Pengajuan Izin</h4>
          </div>
          <div class="card-body">
              <form class="forms-sample" method="post" action="/pjsimpan">
                  <?= csrf_field(); ?>
                  <div class="form-group">
                      <label for="ijn_pengguna">Organisasi/ Divisi</label>
                      <input type="text" class="form-control" id="ijn_pengguna" name="ijn_pengguna" required="flags">
                  </div>
                  <div class="form-group">
                      <label for="ijn_penanggungjawab">Penanggungjawab</label>
                      <input type="text" class="form-control" id="ijn_penanggungjawab" name="ijn_penanggungjawab">
                  </div>
                  <div class="form-group">
                      <label for="ijn_ruang_id">Lokasi</label>
                      <select class="form-control" id="ijn_ruang_id" name="ijn_ruang_id">
                          <option value="">--Pilih--</option>
                          <?php foreach ($ruang as $r) { ?>
                              <option value="<?= $r['id']; ?>"><?= $r['ruang_nama']; ?></option>
                          <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="ijn_tanggal">Tanggal</label>
                      <input type="date" class="form-control" id="ijn_tanggal" name="ijn_tanggal">
                  </div>
                  <div class="row form-group">
                      <div class="col-md-6">
                          <label for="ijn_mulai">Jam Mulai</label>
                          <input type="time" class="form-control" id="ijn_mulai" name="ijn_mulai">
                      </div>
                      <div class="col-md-6">
                          <label for="ijn_selesai">Jam Selesai</label>
                          <input type="time" class="form-control" id="ijn_selesai" name="ijn_selesai">
                      </div>
                  </div>

                  <div class="form-group m-b-20">
                      <label for="ijn_kegiatan">Deskripsi Kegiatan</label>
                      <textarea class="form-control" id="ijn_kegiatan" rows="4" name="ijn_kegiatan"></textarea>
                  </div>

                  <div class="form-group m-b-20">
                      <label for="ijn_perangkat">Perangkat tambahan</label>
                      <textarea class="form-control" id="ijn_perangkat" rows="4" name="ijn_perangkat"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Upload Surat Izin</label>
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label" for="inputGroupFile02">Pilih file</label>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-common mr-3">Kirim</button>
                  <a href="/perijinan" class="btn btn-light">Batal</a>
              </form>
          </div>
      </div>
  </div>


  <!-- AKHIR DARI SECTION -->
  <?= $this->endSection(); ?>