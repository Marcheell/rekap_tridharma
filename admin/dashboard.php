<?php
include('../config/functions/functionDosen.php');
$jumlahDosen = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_dosen"));
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
            <div class="container py-4">
              <!-- welcome -->
              <div class="row beranda-title p-2 justify-content-center">
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bold">Selamat Datang, Mimin</h3>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>

              <!-- profil -->
              <div class="row beranda-section justify-content-center">
                <div class="col-11 col-lg-12">
                  <div class="wrapper-item p-3 rounded-4">
                    <div class="row beranda-item">
                      <div class="col-lg-12 beranda-item-wrapper rounded-4 py-3" style="background-color: white;">
                        <span class="fs-5">Jumlah Dosen</span>
                        <p class="fs-4 fw-bold m-0"><?= $jumlahDosen; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- profil -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>

      <!-- footer -->
      <?php include ('../app/layouts/layout_admin/footer_admin.php'); ?>
      <!-- footer -->

      <!-- main  -->
    </div>

    <!-- js -->
    <?php include ('../app/layouts/layout_admin/js_admin.php'); ?>
    <!-- js -->
  </body>
</html>
