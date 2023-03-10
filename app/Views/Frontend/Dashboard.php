  <!-- MEMANGGIL EXTENDS TEMPLATE -->
  <?= $this->extend('layout/template'); ?>

  <!-- MEMULAI SECTION  -->
  <?= $this->section('konten'); ?>


  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <div class="icon"><i class="lni-notepad"></i></div>
                          <p class="text-muted">Laporan Masuk</p>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-primary"><?= $claporan; ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <div class="icon"><i class="lni-check-mark-circle"></i></div>
                          <p class="text-muted">Terselesaikan</p>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-info"><?= $cselesai; ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <div class="icon"><i class="lni-construction"></i></div>
                          <p class="text-muted">Dikerjakan</p>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-warning"><?= $cproses; ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <div class="icon"><i class="lni-calendar"></i></div>
                          <p class="text-muted">Perijinan Masuk</p>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-purple"><?= $cizin; ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>


  <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Progress Penanganan</h4>
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
                          <?php foreach ($progress as $p) {
                                if ($p['lap_status'] == 'Terjadwal') $badge = 'badge-info';
                                if ($p['lap_status'] == 'Proses') $badge = 'badge-warning';
                                if ($p['lap_status'] == 'Selesai') $badge = 'badge-success';
                                if ($p['lap_status'] == 'Dibatalkan') $badge = 'badge-danger';
                            ?>
                              <tr>
                                  <td>
                                      <div class="list-media">
                                          <div class="list-item">
                                              <div class="media-img">
                                                  <a class="btn btn-circle <?= $badge; ?> text-white"><?= strtoupper(substr($p['lap_nama'], 0, 2)); ?></a>
                                              </div>
                                              <div class="info">
                                                  <span class="title text-semibold"><?= $p['lap_nama']; ?></span>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td><?= $p['ruang_nama']; ?></td>
                                  <td><?= $p['lap_keterangan']; ?></td>
                                  <td><a href="#" class="badge <?= $badge; ?>"><?= $p['lap_status']; ?></a></td>
                              </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <!-- AKHIR DARI SECTION -->
      <?= $this->endSection(); ?>