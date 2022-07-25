<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mathematics Event XXII</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

    <!--  CSS + font -->
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
                <a href="#class" class="nav-link smoothScroll">Login</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pendaftaran
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?= base_url('register/sekolah') ?>">Sekolah</a>
                  <a class="dropdown-item" href="<?= base_url('register') ?>">Peserta</a>
                </div>
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
          <h2 data-aos="fade-up" data-aos-delay="200">Pendaftaran Peserta</h2>
        </div>
  
        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
          <div class="class-thumb">
            <div class="class-info">
              <img src="images/0001.jpg" class="img-fluid" alt="foto1" />
            </div>
          </div>
        </div>


        <div class="mt-5 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php elseif(!empty(session()->getFlashdata('success'))):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4>Berhasil</h4>
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url(); ?>/register/peserta/process" method="post" class="contact-form webform" data-aos="fade-up" role="form" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama"/>

                <label for="nisn">NISN Peserta</label>
                <input type="text" class="form-control" name="nisn" placeholder="Contoh: 0001710121" />

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="gender">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                    <select class="form-control" id="tingkat_pendidikan" name="tingkat">
                    <option value="">--Pilih Tingkat--</option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <select class="form-control" id="asal_sekolah" name="sekolah">
                    <option>--Pilih Sekolah--</option>
                    <?php foreach ($sekolah2 as $sekolah) : ?>
                        <option><?= $sekolah['nama_sekolah'] ?></option>
                    <?php endforeach ?>
                    </select>
                </div>

                <label for="kontak_wa">Kontak WhatsApp</label>
                <input type="text" class="form-control" name="kontak_wa" placeholder="Contoh: 0807812348765"/>

                <label for="email">Email Peserta</label>
                <input type="text" class="form-control" name="email" placeholder="" />

                <label for="Username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="" />

                <label for="Password">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="" />

                <div class="custom-file mb-4">
                    <input type="file" class="custom-file-input" id="foto_peserta" name="foto_peserta">
                    <label class="custom-file-label" for="foto_peserta">Foto Peserta</label>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto_rapor" name="foto_rapor">
                    <label class="custom-file-label tes" for="foto_rapor">Foto Rapor</label>
                </div>
            <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>
            </form>
        </div>
        </div>
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
    <script>
            const foto_peserta = document.querySelector('#foto_peserta');
            foto_peserta.addEventListener('change', (event) => {
                const peserta_label = document.querySelector('.custom-file-label');
                peserta_label.textContent = foto_peserta.files[0].name;
            });
    </script>
    <script>
            const rapor = document.querySelector('#foto_rapor');
            rapor.addEventListener('change', (event) => {
                const rapor_label = document.querySelector('.tes');
                rapor_label.textContent = rapor.files[0].name;
            });
    </script>
</body>
</html>
