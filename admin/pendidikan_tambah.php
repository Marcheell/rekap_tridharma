<?php
include('../config/functions/functionPendidikan.php');

$result = mysqli_query($conn, "SELECT * FROM tb_dosen");

if (isset($_POST['submit'])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'pendidikan_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambah!');
                document.location.href = 'pendidikan_tambah.php';
            </script>
        ";
    }
}


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Riwayat pendidikan | Tri Dharma</title>

    <?php include ('../app/layouts/layout_admin/link_admin.php'); ?>

  </head>
  <body>
    <div class="wrapper-content">
      <!-- navbar -->
      <?php include ('../app/layouts/layout_admin/navbar_admin.php'); ?>
      <!-- navbar -->

      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- sidebar -->
          <?php include ('../app/layouts/layout_admin/sidebar_admin.php'); ?>
          <!-- sidebar -->

          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-3">
              <!-- welcome -->
              <div
                class="row welcome py-2 mb-4 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h2 class="fw-bold">Tambah Riwayat Pendidikan</h2>
                </div>
              </div>
              <!-- tambah Riwayat Pendidikan -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row tambah-pendidikan">
                        <div class="form-tambah">
                            <!-- form tambah start -->
                          <form action="" method="POST">
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="perguruan_tinggi" class="form-label"
                                    >Perguruan Tinggi</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="perguruan_tinggi"
                                    name="perguruan_tinggi"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="bidang_ilmu" class="form-label"
                                    >Bidang Ilmu</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="bidang_ilmu"
                                    name="bidang_ilmu"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tahun_masuk" class="form-label"
                                    >Tahun Masuk</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tahun_masuk"
                                    name="tahun_masuk"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tahun_lulus" class="form-label"
                                    >Tahun Lulus</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tahun_lulus"
                                    name="tahun_lulus"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="gelar_akademik" class="form-label"
                                    >Gelar Akademik</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="gelar_akademik"
                                    name="gelar_akademik"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="jenjang" class="form-label"
                                    >Jenjang Pendidikan</label
                                  >
                                  <select class="form-select" name="jenjang" id="jenjang" aria-label="Default select example">
                                    <option selected>-- Pilih --</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                  <label for="jenjang" class="form-label"
                                    >Nama Dosen</label
                                  >
                                  <select class="form-select" name="id_dosen" id="id_dosen" aria-label="Default select example">
                                    <option selected>-- Pilih --</option>
                                    <?php while ($data = mysqli_fetch_array($result)) { ?>
                                    <option value="<?= $data['id_dosen']; ?>"><?php echo $data['nama'];?></option>
                                    <?php } ?>
                                    </select>
                                </div>


                              </div>
                              <div class="">
                                  <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-blue btn-outline-success"
                                  >
                                    Tambah
                                  </button>
                                </div>

                            </div>
                          </form>
                         <!-- form tambah pendidikan -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- tambah pendidikan -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <?php include ('../app/layouts/layout_admin/footer_admin.php'); ?>
      <!-- main  -->
    </div>
    <?php include ('../app/layouts/layout_admin/js_admin.php'); ?>
  </body>
</html>
