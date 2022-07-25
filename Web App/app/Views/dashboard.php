<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mathematics Event XXII</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--  CSS + font -->
    <link rel="icon" href="<?= base_url('images/logo fix.png') ?>" type="image/gif"> 
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
  </head>
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- navbar -->
    <link rel="icon" href="<?= base_url('images/logo fix.png') ?>" type="image/gif"> 
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
  </head>
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('/dashboard') ?>"><img src="<?= base_url('images/logo fix.png') ?>" width="50px" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="<?= base_url('dashboard/profil') ?>" class="nav-link smoothScroll">Profil</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link smoothScroll">logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- end navbar -->


<!-- LOGIN -->
<section class="class section" id="class">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12 text-center mb-5 mt-4">
        <h2 data-aos="fade-up">Dashboard <?= session()->get('nama'); ?></h2>
      </div>

      
</section>
<!-- END LOGIN -->

    <!-- FOOTER -->
    <footer class="site-footer">
    <div class="container">
        <div class="row">
        <div class="ml-auto col-lg-4 col-md-5"></div>

        <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
            <ul style="list-style-type:none;">
            <h4>Contact us</h4>
            <li>
                <p><i class="fa fa-phone mr-1"></i>0878xxxxxxx (A)</p>
            </li>
            <li>
                <p><i class="fa fa-phone mr-1"></i>0878xxxxxxx (B)</p>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/aos.js') ?>"></script>
    <script src="<?= base_url('js/smoothscroll.js') ?>"></script>
    <script src="<?= base_url('js/custom.js') ?>"></script>
</body>
</html>
