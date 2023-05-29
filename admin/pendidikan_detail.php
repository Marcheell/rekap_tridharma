<?php
include('../config/functions/functionPendidikan.php');

$id = $_GET['id_dosen'];

$result = mysqli_query($conn, "SELECT * FROM tb_pendidikan INNER JOIN tb_dosen ON tb_pendidikan.id_dosen=tb_dosen.id_dosen WHERE tb_pendidikan.id_dosen = $id");
// $result = query("SELECT * FROM tb_pendidikan INNER JOIN tb_dosen ON tb_pendidikan.id_dosen=tb_dosen.id_dosen ");
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
                class="row welcome py-2 mb-2 mb-lg-3 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h2 class="fw-bold">Riwayat Pendidikan</h2>
                  <p class="m-0">
                    Sistem Informasi Tridharma Universitas Negeri Medan
                  </p>
                </div>
              </div>
              <!-- ringkasan profil -->

              <!-- ringkasan profil -->
              <div class="row profile-dosen mb-3">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 px-3 py-1">
                      <div class="row align-items-center mt-4">
                        <div class="col-lg-12">
                          <div class="table-responsive">
                            <table
                              class="table table-2 table-striped table-borderless" id="data-table"
                            >
                              <thead>
                                <tr>
                                  <th>Perguruan Tinggi</th>
                                  <th>Bidang Ilmu</th>
                                  <th>Tahun Masuk</th>
                                  <th>Tahun Lulus</th>
                                  <th>Gelar Akademik</th>
                                  <th>Jenjang</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php while ($data = mysqli_fetch_array($result)) { ?>
                                <tr>
                                  <td><?= $data['perguruan_tinggi']; ?></td>
                                  <td><?= $data['bidang_ilmu']; ?></td>
                                  <td><?= $data['tahun_masuk']; ?></td>
                                  <td><?= $data['tahun_lulus']; ?></td>
                                  <td><?= $data['gelar_akademik']; ?></td>
                                  <td><?= $data['jenjang']; ?></td>
                                  <td>
                                    <div class="d-flex align-items-stretch">
                                      <div
                                        class="button-edit-wrapper me-2"
                                        style="width: 5em"
                                      >
                                        <a
                                          href="pendidikan_ubah.php?id_pendidikan=<?= $data['id_pendidikan']; ?>"
                                          class="btn-blue btn w-100"
                                          style="background-color: #002743; color: white"
                                          >Edit</a
                                        >
                                      </div>
                                      <div class="button-hapus-wrapper" style="width: 5em">
                                        <a
                                          href="pendidikan_hapus.php?id_pendidikan=<?= $data['id_pendidikan']; ?>"
                                          class="btn w-100"
                                          style="border: 1px solid #002743"
                                          onclick="return confirm('Yakin?')"
                                          >Hapus</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <?php } ?>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="row button">
                        <div class="col-12 d-flex justify-content-end">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- riwayat pendidikan -->

              <!-- riwayat pendidikan -->
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
