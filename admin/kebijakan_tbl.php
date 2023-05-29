<?php
include('../config/functions/functionKebijakan.php');
$kebijakan = query("SELECT DISTINCT nama,nidn,tb_kebijakan.id_dosen FROM tb_kebijakan INNER JOIN tb_dosen ON tb_kebijakan.id_dosen=tb_dosen.id_dosen");
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
              <div class="row welcome p-2 justify-content-center">
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bold">Luaran Hasil (Merumuskan Kebijakan Publik)</h3>
                </div>
              </div>

              <!-- profil -->
              <div class="row table-section justify-content-center">
                <div class="col-11 col-lg-12">
                  <div class="wrapper-table p-3 rounded-4">
                    <div class="row button-section mb-3">
                      <div class="col-12">
                        <div class="button-tambah-wrapper">
                          <a href="kebijakan_tambah.php" class="btn btn-blue">Tambah Merumuskan Kebijakan Publik</a>
                        </div>
                      </div>
                    </div>

                    <div class="row table-profil">
                      <div class="col-12">
                        <div class="table-responsive">
                          <table class="table" id="data-table">
                            <thead>
                              <th>No</th>
                              <th>NIDN</th>
                              <th>Nama</th>
                              <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($kebijakan as $dataKebijakan) : ?>
                              <tr>
                                <td class="fw-bold"><?= $no++; ?></td>
                                <td><?= $dataKebijakan['nidn']; ?></td>
                                <td><?= $dataKebijakan['nama']; ?></td>
                                <td class="button">
                                  <a href="kebijakan_detail.php?id_dosen=<?= $dataKebijakan['id_dosen']; ?>"  class="btn btn-blue">Detail</a>
                                </td>
                              </tr>
                                <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
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
