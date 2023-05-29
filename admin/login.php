<?php
include('../config/functions/functionAuth.php');

if (isset($_SESSION['login']) && (isset($_SESSION['level']) == 'admin') ) {
    header('location: dashboard.php');
} else if (isset($_SESSION['login']) && (isset($_SESSION['level']) == 'dosen')) {
    header('location:../index.php');
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usersInfo = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");
    // $siswaInfo = mysqli_query($conn, "SELECT * FROM siswa WHERE username = '$username'");

    if (mysqli_num_rows($usersInfo) === 0) {
        $error4 = true;
    } //else if (mysqli_num_rows($siswaInfo) === 0) {
        //$error4 = true;
    //}

    if (mysqli_num_rows($usersInfo) === 1) {

        $row = mysqli_fetch_assoc($usersInfo);

        if (password_verify($password, $row['password'])) {
            // session set
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama_petugas'];
            $_SESSION['level'] = $row['level'];
            header('location: dashboard.php');
            exit;
        }

        $error = true;
    } //else if (mysqli_num_rows($siswaInfo) === 1) {

    //     $row = mysqli_fetch_assoc($siswaInfo);

    //     if (password_verify($password, $row['password'])) {
    //         // sessin set
    //         $_SESSION['login'] = true;
    //         $_SESSION['nama'] = $row['nama_siswa'];
    //         $_SESSION['level'] = $row['level'];
    //         header('location: home.php');
    //         exit;
    //     }

    //     $error = true;
    // }
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
      <!-- main  -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-3">
              <!-- login form -->
              <div class="row justify-content-center align-items-center vh-100">
                <div class="login-card col-lg-4 col-10 p-4 rounded-3">
                  <div class="login-form py-3 px-3">
                    <div class="header-form">
                      <div class="logo-form mb-4">
                        <div class="header-form">
                          <div class="d-flex align-items-center">
                            <div class="logo me-3">
                              <img
                                src="../app/assets/img/Logo.png"
                                class="img-fluid"
                                alt="logo UNIMED"
                              />
                            </div>
                            <div class="logo-name">
                              <p class="m-0 fw-bold fs-4">TRIDHARMA</p>
                              <small>Ilmu Komputer</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="header-text-form">
                        <p class="fw-bold mx-0 my-1">Halo! Selamat Datang</p>
                        <small>Silahkan masuk untuk melanjutkan</small>
                      </div>
                    </div>
                    <div class="main-login-form mt-4">

                      <?php if (isset($error)) { ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                              Gagal, mohon periksa lagi username dan password Anda!
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php } else if (isset($error4)) { ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                              Gagal, Anda belum terdaftar!
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php }  ?>

                      <form action="" method="POST">
                        <div class="mb-4">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Username"
                            name="username"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            name="password"
                          />
                        </div>
                        <div class="text-center">
                          <button
                            type="submit"
                            class="btn text-white px-4 w-100 rounded-3"
                            name="login"
                          >
                            Masuk
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="login-footer text-center mt-4">
                      <small>
                        Tidak bisa Masuk?
                        <span><a href="#">Hubungi Admin!</a></span>
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>
      <!-- main  -->
    </div>
    <?php include ('../app/layouts/js.php'); ?>
  </body>
</html>
