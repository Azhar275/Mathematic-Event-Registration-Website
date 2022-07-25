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
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('images/logo fix.png') ?>" width="50px" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a href="<?= base_url() ?>" class="nav-link smoothScroll">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/profil') ?>" class="nav-link smoothScroll">Profil</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link smoothScroll">logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- end navbar -->

    <!-- ABOUT 2  -->
    <section class="class section" id="class">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 text-center mb-5 mt-5">
            <h2 data-aos="fade-up" data-aos-delay="200">Profil Peserta</h2>
            <?php if ($datapeserta['status'] == "Belum Aktif") : ?>
                <div class="alert alert-danger" role="alert" data-aos="fade-up" data-aos-delay="400">
                    Kamu belum memiliki kode peserta. Silahkan menyelesaikan pembayaran untuk memperoleh kode peserta.
                </div>
            <?php endif; ?>
            </div>

          <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="class-thumb">
              <div class="class-info">
                <img src="<?php echo base_url('foto_peserta/'.$datapeserta['foto_peserta']);?>" class="img-fluid" alt="foto1" />
              </div>
            </div>
          </div>
          

          <div class="col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="class-thumb">
              <p class="mt-3">Nama Lengkap  <span style="padding-left:90px;">:</span> <?= $datapeserta['nama'] ?></p>
              <p class="mt-3">Username      <span style="padding-left:130px;">:</span> <?= $datapeserta['username'] ?></p>
              <p class="mt-3">Status       <span style="padding-left:165px;">:</span> <a class="badge <?= ($datapeserta['status'] == "Belum Aktif") ? 'badge-danger': 'badge-success' ?>" style="color:white;"><?= $datapeserta['status'] ?></a></p>
              <?php if ($datapeserta['status'] != "Belum Aktif") : ?>
                <p class="mt-3">Kode Peserta<span style="padding-left:110px;">:</span> <?= $datatingkat['kode_peserta'] ?></p>
            <?php endif; ?>
              <p class="mt-3">Tingkat       <span style="padding-left:155px;">:</span> <?= $tingkat ?></p>
              <p class="mt-3">NISN Peserta  <span style="padding-left:106px;">:</span> <?= $datapeserta['nisn'] ?></p>
              <p class="mt-3">Jenis Kelamin <span style="padding-left:102px;">:</span> <?= $datapeserta['gender'] ?></p>
              <p class="mt-3">Asal Sekolah <span style="padding-left:110px;">:</span> <?= $datapeserta['sekolah'] ?></p>
              <p class="mt-3">Email Peserta<span style="padding-left:107px;">:</span> <?= $datapeserta['email'] ?></p>
            </div>
          </div>

          </section>
        </div>
      </div>

    <!-- END ABOUT 2  -->

        <!-- FOOTER -->
        <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="ml-auto col-lg-4 col-md-5"></div>

              <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                <ul style="list-style-type: none">
                  <h4>Contact us</h4>
                  <li>
                    <p><i class="fa fa-phone mr-1"></i>0813 4161 3022 (Alif)</p>
                  </li>
                  <li>
                    <p><i class="fa fa-phone mr-1"></i>0813 4161 3024 (Risqul)</p>
                  </li>
                  <li>
                    <p><i class="fa fa-phone mr-1"></i>0822 9232 8975 (Gifari)</p>
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
