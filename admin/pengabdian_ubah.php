<?php
include('../config/functions/functionPengabdian.php');

$id = $_GET['id_pengabdian'];

$dataPengabdian = query("SELECT * FROM tb_pengabdian WHERE id_pengabdian = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'pengabdian_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'pengabdian_ubah.php';
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
    <title>Ubah Pengabdian Masyarakat | Tri Dharma</title>

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
                  <h2 class="fw-bold">Ubah Pengabdian Masyarakat</h2>
                </div>
              </div>
              <!-- ubah pengabdian -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row ubah-pengabdian">
                        <div class="form-ubah">
                            <!-- form ubah start -->
                          <form action="" method="POST">
                            <div class="row justify-content-center">
                              <div class="col-lg-12">
                                <input type="hidden" name="id_pengabdian" value="<?= $dataPengabdian['id_pengabdian']; ?>">
                                <div class="mb-3">
                                  <label for="judul_pengabdian" class="form-label"
                                    >Judul pengabdian</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="judul_pengabdian"
                                    name="judul_pengabdian"
                                    value="<?= $dataPengabdian['judul_pengabdian']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tahun" class="form-label"
                                    >Tahun</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tahun"
                                    name="tahun"
                                    value="<?= $dataPengabdian['tahun']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="sumber_dana" class="form-label"
                                    >Sumber Dana</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="sumber_dana"
                                    name="sumber_dana"
                                    value="<?= $dataPengabdian['sumber_dana']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nominal_dana" class="form-label"
                                    >Nominal Dana</label
                                  >
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="nominal_dana"
                                    name="nominal_dana"
                                    value="<?= $dataPengabdian['nominal_dana']; ?>"
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
                                    value="<?= $dataPengabdian['link_file']; ?>"
                                    required
                                  />
                                </div>
                                <input type="hidden" name="id_dosen" value="<?= $dataPengabdian['id_dosen']; ?>">
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
