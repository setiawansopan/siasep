  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>

  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Usulan Sarana Prasarana</h4>
      </div>
      <div class="card-body">
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Nama</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Lokasi Sarpra</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Kelas</option>
              <option>Masjid</option>
            </select>
          </div>
          <div class="form-group m-b-20">
            <label for="exampleTextarea1">Deskripsi Usulan</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-common mr-3">Kirim</button>
          <button class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>


  <!-- AKHIR DARI SECTION -->
  <?= $this->endSection(); ?>