<?php
include('../config/functions/functionDosen.php');

$id = $_GET['id_dosen'];

$dataDosen = query("SELECT * FROM tb_dosen WHERE id_dosen = $id")[0];

if (isset($_POST['submit'])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'dosen_tbl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'dosen_ubah.php';
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
    <title>Ubah Dosen | Tri Dharma</title>

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
                  <h2 class="fw-bold">Ubah Dosen</h2>
                </div>
              </div>
              <!-- ubah dosen -->
              <div class="row profile-dosen justify-content-center">
                <div class="col-lg-12">
                  <div class="profile-wrapper">
                    <div class="wrapper-body rounded-4 p-4">
                      <div class="row ubah-dosen">
                        <div class="form-ubah">
                            <!-- form ubah start -->
                          <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row justify-content-center">
                              <div class="col-lg-6">
                                <input type="hidden" name="id_dosen" value="<?= $dataDosen['id_dosen']; ?>">
                                <input type="hidden" name="gambarLama" value="<?= $dataDosen['gambar']; ?>">
                                <div class="mb-3">
                                  <label for="gambar" class="form-label"
                                    >Gambar</label
                                  ><br>
                                  <img src="../app/img/<?= $dataDosen['gambar']; ?>" alt="" width="100" height="120" class="img-thumbnail mb-2">
                                  <input type="file" class="form-control" id="gambar" name="gambar">
                                </div>
                                <div class="mb-3">
                                  <label for="nama" class="form-label"
                                    >Nama</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    name="nama"
                                    value="<?= $dataDosen['nama']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tempat_lahir" class="form-label"
                                    >Tempat Lahir</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="tempat_lahir"
                                    name="tempat_lahir"
                                    value="<?= $dataDosen['tempat_lahir']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="tanggal_lahir" class="form-label"
                                    >Tanggal Lahir</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="tgl_lahir"
                                    name="tgl_lahir"
                                    value="<?= $dataDosen['tgl_lahir']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="jenis_kelamin" class="form-label"
                                    >Jenis Kelamin</label
                                  >
                                    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                                    <option selected>-- Pilih --</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                  <label
                                    for="fungsionalJabatan"
                                    class="form-label"
                                    >Fungsional Jabatan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="jabatan_fungsional"
                                    name="jabatan_fungsional"
                                    value="<?= $dataDosen['jabatan_fungsional']; ?>"
                                    required
                                  />
                                </div>


                              </div>
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="nip" class="form-label"
                                    >NIP</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nip"
                                    name="nip"
                                    value="<?= $dataDosen['nip']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="nidn" class="form-label"
                                    >NIDN</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="nidn"
                                    name="nidn"
                                    value="<?= $dataDosen['nidn']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="alamat_email" class="form-label"
                                    >Alamat Email</label
                                  >
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="<?= $dataDosen['email']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="no_hp" class="form-label"
                                    >Nomor Handphone</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="no_hp"
                                    name="no_hp"
                                    value="<?= $dataDosen['no_hp']; ?>"
                                    required
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="alamat_kantor" class="form-label"
                                    >Alamat Kantor</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="alamat_kantor"
                                    name="alamat_kantor"
                                    value="<?= $dataDosen['alamat_kantor']; ?>"
                                    required
                                  />
                                </div>

                                <div class="mb-3">
                                  <label for="lulusan" class="form-label"
                                    >Lulusan yang telah dihasilkan</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="lulusan"
                                    name="lulusan"
                                    value="<?= $dataDosen['lulusan']; ?>"
                                    required
                                  />
                                </div>

                                <!-- <div class="mb-3 mt-lg-0">
                                  <label for="password" class="form-label"
                                    >Password</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    required
                                  />
                                </div> -->
                                <input type="hidden" name="password" value="<?= $dataDosen['password']; ?>">

                              </div>
                              <div class="">
                                  <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-blue btn-outline-light"
                                  >
                                    Ubah
                                  </button>
                                </div>

                            </div>
                          </form>
                         <!-- form Ubah dosen -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Ubah dosen -->
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
