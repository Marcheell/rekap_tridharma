<?php
include('../config/functions/functionPenghargaan.php');

$result = mysqli_query($conn, "SELECT * FROM tb_dosen");

if (isset($_POST['submit'])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'penghargaan_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambah!');
                document.location.href = 'penghargaan_tambah.php';
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
    <title>TRIDHARMA</title>

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
                  <h2 class="fw-bold">Tambah Penghargaan Dalam</h2>
                </div>
              </div>
              <!-- tambah Riwayat Pendidikan -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row tambah-penghargaan">
                        <div class="form-tambah">
                            <!-- form tambah start -->
                          <form action="" method="POST">
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <div class="mb-3">
                                  <label for="jenis_penghargaan" class="form-label"
                                    >Jenis Penghargaan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="jenis_penghargaan"
                                    name="jenis_penghargaan"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="institusi" class="form-label"
                                    >Institusi Pemberi Penghargaan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="institusi"
                                    name="institusi"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tahun" class="form-label"
                                    >Tahun</label
                                  >
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="tahun"
                                    name="tahun"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="link_file" class="form-label"
                                    >Link File (Google Drive)</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="link_file"
                                    name="link_file"
                                    required
                                  />
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
