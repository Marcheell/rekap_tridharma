<?php
include('../config/functions/functionPemakalah.php');

$id = $_GET['id_pemakalah'];

$dataPemakalah = query("SELECT * FROM tb_pemakalah WHERE id_pemakalah = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'makalah_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'makalah_ubah.php';
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
    <title>Ubah luaran | Tri Dharma</title>

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
                  <h2 class="fw-bold">Ubah luaran</h2>
                </div>
              </div>
              <!-- ubah luaran -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row ubah-luaran">
                        <div class="form-ubah">
                            <!-- form ubah start -->
                          <form action="" method="POST">
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <input type="hidden" name="id_pemakalah" value="<?= $dataPemakalah['id_pemakalah']; ?>">
                                <div class="mb-3">
                                  <label for="nama_seminar" class="form-label"
                                    >Nama Seminar</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nama_seminar"
                                    name="nama_seminar"
                                    value="<?= $dataPemakalah['nama_seminar']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="judul_artikel_ilmiah" class="form-label"
                                    >Judul Artikel Ilmiah</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="judul_artikel_ilmiah"
                                    name="judul_artikel_ilmiah"
                                    value="<?= $dataPemakalah['judul_artikel_ilmiah']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="waktu" class="form-label"
                                    >Waktu</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="waktu"
                                    name="waktu"
                                    value="<?= $dataPemakalah['waktu']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tempat" class="form-label"
                                    >Tempat</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tempat"
                                    name="tempat"
                                    value="<?= $dataPemakalah['tempat']; ?>"
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
                                    value="<?= $dataPemakalah['link_file']; ?>"
                                    required
                                  />
                                </div>
                                <input type="hidden" name="id_dosen" value="<?= $dataPemakalah['id_dosen']; ?>">
                              </div>
                              <div class="">
                                  <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-blue btn-outline-success"
                                  >
                                    ubah
                                  </button>
                                </div>

                            </div>
                          </form>
                         <!-- form ubah pendidikan -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ubah pendidikan -->
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
