<!--
=========================================================
* Soft UI Dashboard 3 - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/assets/img/favicon.png">
  <title>
    Soft UI Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <!-- Navbar -->

  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('assets/assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Hoşgeldiniz</h1>
              <p class="text-lead text-white">Sar sipariş sistemi ile uygulamamızdan kolayca sipariş verip hazırlandığını kontrol edebilrisiniz...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <div>
                  <a class="btn btn-outline-light w-100" href="javascript:;">
                  <img src="assets/assets/img/logo-ct-dark.png" alt="main_logo" style="max-width: 100%; height: auto;">
                  </a>
                </div>

              </div>
             
              <div class="card-body">
              <?php if(session('error')): ?>
    <div class="alert alert-danger" role="alert">
        <strong>Hata:</strong> <?= session('error'); ?>
    </div>
<?php endif; ?>
              <form method="POST" action="<?= base_url('login/submit'); ?>" role="form text-left">
  <div class="mb-3">
    <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı" aria-label="Name" aria-describedby="email-addon">
  </div>

  <div class="mb-3">
    <input type="password" name="password" class="form-control" placeholder="Şifre" aria-label="Password" aria-describedby="password-addon">
  </div>

  <div class="text-center">
    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Giriş Yap</button>
  </div>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/assets/js/core/popper.min.js"></script>
  <script src="assets/assets/js/core/bootstrap.min.js"></script>
  <script src="assets/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>