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
                <a href="<?= base_url('login') ?>" class="nav-link smoothScroll">Login</a>
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
        <h2 data-aos="fade-up" data-aos-delay="200">Pendaftaran Sekolah</h2>
      </div>

      <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
        <div class="class-thumb">
          <div class="class-info">
            <img src="<?= base_url('images/pamflet_me.jpg') ?>" class="img-fluid" alt="foto1" />
          </div>
        </div>
      </div>

        <div class="mt-5 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Gagal</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
          <form action="<?= base_url(); ?>/register/sekolah/process" method="post" class="contact-form webform" data-aos="fade-up" role="form">
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('nama_sekolah')) ? 'is-invalid': '' ?>" name="nama_sekolah" value="<?= old('nama_sekolah') ?>"/>
            <div class="invalid-feedback"><?= \Config\Services::validation()->getError('nama_sekolah'); ?></div>
          </div>
            

            <div class="form-group">
                      <label for="tingkat">Tingkat Pendidikan</label>
                      <select class="form-control custom-select <?= (\Config\Services::validation()->hasError('tingkat')) ? 'is-invalid': '' ?>" id="tingkat_pendidikan" name="tingkat">
                      <option disabled selected> -- Pilih tingkat sekolah -- </option>
                      <option>SD</option>
                      <option>SMP</option>
                      <option>SMA</option>
                      </select>
                      <div class="invalid-feedback"><?= \Config\Services::validation()->getError('tingkat'); ?></div>
            </div>
            <div class="form-group">
              <label for="provinsi">Provinsi Sekolah</label>
              <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('provinsi')) ? 'is-invalid': '' ?>" name="provinsi" placeholder="" value="<?= old('provinsi') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('provinsi'); ?></div>
            </div>
            
            <div class="form-group">
              <label for="kabupaten">Kabupaten Sekolah</label>
              <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('kabupaten')) ? 'is-invalid': '' ?>" name="kabupaten" placeholder="" value="<?= old('kabupaten') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('kabupaten'); ?></div>
            </div>
                
            <div class="form-group">
              <label for="alamat">Alamat Sekolah</label>
              <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('alamat')) ? 'is-invalid': '' ?>" name="alamat" placeholder="" value="<?= old('alamat') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('alamat'); ?></div>
            </div>

            <div class="form-group">
              <label for="email">Email Sekolah</label>
              <input type="text" class="form-control <?= (\Config\Services::validation()->hasError('email')) ? 'is-invalid': '' ?>" name="email" placeholder="" value="<?= old('email') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('email'); ?></div>
            </div>

            <div class="form-group">
              <label for="kontak_pendamping">Kontak Guru Pendamping</label>
              <input type="tel" class="form-control <?= (\Config\Services::validation()->hasError('kontak_pendamping')) ? 'is-invalid': '' ?>" name="kontak_pendamping" placeholder="Contoh: 0807812348765" value="<?= old('kontak_pendamping') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('kontak_pendamping'); ?></div>
            </div>

            <div class="form-group">
              <label for="kontak_sekolah">Kontak Sekolah</label>
              <input type="tel" class="form-control <?= (\Config\Services::validation()->hasError('kontak_sekolah')) ? 'is-invalid': '' ?>" name="kontak_sekolah" placeholder="" value="<?= old('kontak_sekolah') ?>"/>
              <div class="invalid-feedback"><?= \Config\Services::validation()->getError('kontak_sekolah'); ?></div>
            </div>

        <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>
        </div>
      </form>
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
