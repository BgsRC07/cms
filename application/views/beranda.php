<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title><?= $judul ?></title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/favicon.ico">
  <link rel="manifest" href="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="<?= site_url('assets/clickr/public/') ?>assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="<?= site_url('assets/clickr/public/') ?>assets/css/theme.css" rel="stylesheet" />

  <link href="<?= site_url('assets/clickr/public/') ?>vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>


<body data-bs-spy="scroll" data-bs-target="#navbar">

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="card-img" src="<?= site_url('assets/clickr/public/') ?>assets/img/gallery/logo.png" alt="..." /><span class="fs-2 fw-bold text-primary ms-2"><?= $konfig->judul_web; ?></span></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item px-2"><a class="nav-link fw-bold" aria-current="page" href="<?= base_url() ?>">Home</a></li>
            <?php foreach ($kategori as $kate) { ?>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
            <?php } ?>
            <li class="nav-item px-2"><a class="nav-link fw-bold" href="<?= base_url('auth') ?>">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="py-0" id="header">
      <div class="container">
        <div class="row align-items-center min-vh-75 min-vh-md-50">
          <div class="col-12 text-center py-8">
            <h1 class="lh-sm fs-lg-6 fs-xxl-7">Welcome To <br /> <?= $konfig->judul_web; ?></h1>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row gx-2">
          <div class="col-12">
            <div class="swiper-container pb-4 overflow-hidden" data-pagination-target="pagination1">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <?php $no = 1;
                  foreach ($carousel as $aa) { ?>
                  <div class="carousel-item <?php if ($no == 1) {echo 'active'; } ?>">
                    <img src="<?= base_url('assets/upload/carousel/' . $aa['foto']) ?>" class="d-block w-100" alt="...">
                  </div>
                  <?php $no++;
                  } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
          </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-light py-5" id="services">

      <div class="container">
        <div class="row">
          <?php foreach ($konten as $uu) { ?>
            <div class="col-12">
              <div class="card mb-3 hover-top-shadow rounded-3 py-3 bg-soft-primary">
                <div class="row g-0 flex-center">
                  <div class="col-md-5 col-lg-4 text-center order-0"><img class="text-center w-100" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" /></div>
                  <div class="col-md-7 col-lg-8">
                    <div class="card-body ps-5 p-lg-8">
                      <h2 class="card-title mb-4 text-primary"><?= $uu['judul'] ?></h2>
                      <i class="fas fa-arrow-right ms-2"></i><a class="btn text-primary" href="#!"><?= $uu['nama_kategori'] ?></a>
                      <p class="card-text mb-4 fs-1 pe-xxl-8"><?= substr($uu['keterangan'], 0, 100); ?>
                      <?php if (strlen($uu['keterangan']) > 100) : ?>
                        . . . <a class="btn px-0 me-3 text-primary" href="<?= base_url('home/artikel/' . $uu['slug']) ?>">Baca Selengkapnya</a>
                        <?php endif; ?>
                    </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 pt-7">

      <div class="container">
        <div class="row justify-content-xl-between gx-3">
          <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
            <h5 class="lh-lg fw-bold text-1000"><?= $konfig->judul_web; ?></h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <p class="mt-4"><?= $konfig->profil_web; ?></p>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Kategori</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="<?= base_url() ?>">Home</a></li>
                <?php foreach ($kategori as $kate) { ?>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
            <?php } ?>
            
              </ul>
            </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <h5 class="lh-lg fw-bold text-1000">Contact</h5>
            <p class="text-800"><i class="fas fa-phone-alt text-primary me-2"></i><span class="text-900">+  <?= $konfig->no_wa; ?></span></p>
            <p class="text-800"><i class="fas fa-envelope text-warning me-2"></i><span class="text-800"><?= $konfig->email; ?></span></p>
            <p class="text-800"><i class="fas fa-map-marker-alt text-success me-2"></i><span class="text-800"><?= $konfig->alamat; ?></span></p>
          </div>
          <div class="col-12">
            <div class="text-center my-4"><a href="<?= $konfig->facebook; ?>"><i class="me-4 fab fa-facebook fs-3 text-facebook"></i></a><a href="<?= $konfig->instagram; ?>"> <i class="me-4 fab fa-instagram fs-3 text-instagram"></i></a></div>
          </div>
        </div>
        <div class="border-bottom border-3"></div>
        <div class="row">
          <div class="col-md-6">
            <p class="my-2 text-center text-md-start"><?= $konfig->judul_web; ?></p>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="<?= site_url('assets/clickr/public/') ?>vendors/@popperjs/popper.min.js"></script>
  <script src="<?= site_url('assets/clickr/public/') ?>vendors/bootstrap/bootstrap.min.js"></script>
  <script src="<?= site_url('assets/clickr/public/') ?>vendors/is/is.min.js"></script>
  <script src="<?= site_url('assets/clickr/public/') ?>vendors/swiper/swiper-bundle.min.js"> </script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="<?= site_url('assets/clickr/public/') ?>vendors/fontawesome/all.min.js"></script>
  <script src="<?= site_url('assets/clickr/public/') ?>assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&amp;display=swap" rel="stylesheet">
</body>

</html>