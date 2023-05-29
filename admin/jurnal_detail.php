<?php
include('../config/functions/functionJurnal.php');

$id = $_GET['id_dosen'];

$result = mysqli_query($conn, "SELECT * FROM tb_jurnal INNER JOIN tb_dosen ON tb_jurnal.id_dosen=tb_dosen.id_dosen WHERE tb_jurnal.id_dosen = $id");
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
              <!-- book -->
              <div
                class="row journal-title justify-content-center mb-2 mb-lg-3"
              >
                <div class="col-11 col-lg-12">
                  <div class="journal-title-wrapper py-2">
                    <h2 class="fw-semibold">Luaran Hasil</h2>
                    <h6 class="text">
                      Sistem Informasi Tridharma Universitas Negeri Medan
                    </h6>
                  </div>
                </div>
              </div>

              <div class="row table-journal-section justify-content-center">
                <?php while ($data = mysqli_fetch_array($result)) { ?>
                <div
                  class="col-11 col-lg-12 journal-table-wrapper py-3 rounded-4 mb-4"
                >
                  <div class="row heading-journal mb-3">
                    <div class="col-lg-12">
                      <h4 class="fw-bold">Jurnal</h4>
                    </div>
                  </div>

                  <div class="row table-section">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <th>Judul</th>
                              <td>
                                <?= $data['judul']; ?>
                              </td>
                            </tr>
                            <tr>
                              <th>Nama Jurnal</th>
                              <td><?= $data['nama_jurnal']; ?></td>
                            </tr>
                            <tr>
                              <th>Vol/No/Tahun</th>
                              <td>
                                <span><?= $data['volume']; ?></span>/<span><?= $data['no']; ?></span>/<span
                                  ><?= $data['tahun']; ?></span
                                >
                              </td>
                            </tr>
                            <tr>
                              <th>Link Google Drive File</th>
                              <td><?= $data['link_file']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="row button">
                    <div class="col-12 d-flex justify-content-end">
                      <div class="button-edit-wrapper me-2" style="width: 5em">
                        <a
                          href="jurnal_ubah.php?id_jurnal=<?= $data['id_jurnal']; ?>"
                          class="btn-blue btn w-100"
                          style="background-color: #002743; color: white"
                          >Edit</a
                        >
                      </div>
                      <div class="button-hapus-wrapper" style="width: 5em">
                        <a
                          href="jurnal_hapus.php?id_jurnal=<?= $data['id_jurnal']; ?>"
                          class=" btn w-100"
                          style="border: 1px solid #002743"
                          onclick="return confirm('Yakin?')"
                          >Hapus</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
            </div>
              <!-- book -->
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
