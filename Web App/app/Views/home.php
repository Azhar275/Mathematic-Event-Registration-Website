<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mathematics Event XXII</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--  CSS + font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
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
          <?php if (!session()->get('logged_in')) : ?>
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
            <?php else:?>
              <li class="nav-item">
              <a href="<?= base_url() ?>" class="nav-link smoothScroll">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/profil') ?>" class="nav-link smoothScroll">Profil</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link smoothScroll">logout</a>
            </li>
            <?php endif; ?>

        </ul>
        </div>
    </div>
    </nav>
    <!-- end navbar -->

<!-- bg ME  -->
<section class="bg-me d-flex flex-column justify-content-center align-items-center mt-5" id="home">
      <div class="bg-overlay"></div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto col-12 mt-5">
            <div class="hero-text mt-5 text-center">
              <h1 class="text-white" data-aos="fade-up" data-aos-delay="300">Welcome to Mathematics Event XXII</h1>
              <h6 data-aos="fade-up" data-aos-delay="300">
                Mathematics Event adalah kompetisi matematika tahunan yang di adakan oleh Himpunan Mahasiswa Matematika Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Hasanuddin (Himatika FMIPA Unhas) sebagai wadah untuk membina
                generasi Indonesia yang kritis,kreatif dan inovatif dengan ilmu matematika. Mathematics Event merupakan kegiatan rutin dalam bentuk kompetisi, kegiatan
                ini sebagai bentuk peran aktif Himatika FMIPA Unhas dalam mencerdaskan
                kehidupan bangsa. Tema dari kegiatan ini adalah “Lentera Pemantik Jiwa Kompetitif Generasi Muda dalam Ajang Matematika”.
              </h6>
              <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END bg ME -->





    <!-- ABOUT 1 -->
    <section class="about section" id="about">
      <div class="container">
        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-6 col-md-10 mx-auto col-12">
            <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="300">Peserta Mathematics Event XXII</h2>
            <h6 data-aos="fade-up" data-aos-delay="300"><strong>Tingkat</strong></h6>
            <ol data-aos="fade-up" data-aos-delay="300">
              <li>SD/SEDERAJAT SE-SULSELBAR</li>
              <li>SMP/SEDERAJAT SE-SULSELBARTENG</li>
              <li>SMA/SEDERAJAT SE-INDONESIA</li>
            </ol>

            <h6 data-aos="fade-up" data-aos-delay="300"><strong>Regional</strong></h6>
            <ol data-aos="fade-up" data-aos-delay="300">
              <li>KOTA PAREPARE (Aula Dinas Pendidikan dan Kebudayaan kota Parepare)</li>
              <li>KABUPATEN BONE (Stadion La patau Bone)</li>
              <li>KABUPATEN MAJENE (SMA NEGERI 2 MAJENE)</li>
              <li>Kabupaten TANA TORAJA (Aula kampus 1 UKI Tana Toraja)</li>
              <li>Kabupaten BANTAENG (Gedung PGRI kabupaten Bantaeng)</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- END ABOUT 1 -->

    <!-- ABOUT 2 -->
    <section class="about section" id="about">
      <div class="container">
        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-8 col-md-10 mx-auto col-12">
            <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="300">Tahapan Mathematics Event XXII</h2>

            <div class="row">
              <div class="mt-lg-2 mb-lg-5 mb-4 col-lg-12 col-md-10 mx-auto col-12">
                <table class="table table table-bordered" data-aos="fade-up" data-aos-delay="300">
                  <thead class="thead-light">
                  <tr>
                    <th class="text-center">Babak Golden Ticket (Seleksi Regional)</th>
                    <th class="text-center">Babak Penyisihan</th>
                    <th class="text-center">Babak Final dan Grand Final</th>
                  </tr>
                </thead>
                  <tr>
                    <td>Di masing-masing regional yang telah ditentukan</td>
                    <td>Baruga A.P. Pettarani, Auditorium Prof. Amiruddin (Universitas Hasanuddin)</td>
                    <td>Gedung IPTEKS (Universitas Hasanuddin)</td>
                  </tr>
                  <tr>
                    <td>Sabtu, 12 Februari 2022</td>
                    <td>Jum’at, 11 Maret 2022</td>
                    <td>Sabtu - Minggu, 12 - 13 Maret 2022</td>
                  </tr>
                </table>
              </div>
            </div>

            <h6><strong>1. Babak Golden Ticket (Seleksi Regional)</strong></h6>
            <li style="list-style: none">
              Babak Golden Ticket untuk regional adalah siswa semua tingkatan (SD, SMP, dan SMA) dengan bentuk soal Multiple Choice dan Essay. Lima peserta dengan nilai tertinggi dari setiap tingkatan (SD, SMP, dan SMA) akan lolos ke babak
              semifinal di Makassar.
            </li>
          </div>
        </div>

        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-8 col-md-10 mx-auto col-12">
            <h6><strong>2. Babak Penyisihan Makassar</strong></h6>
            <li style="list-style: none">Untuk semua tingkatan, mengerjakan soal dengan bentuk Multiple Choice. Untuk lolos ke babak semifinal, jumlah peserta (n / 2) atau (n + 1) / 2 dari total peserta tiap tingkatan.</li>
          </div>
        </div>

        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-8 col-md-10 mx-auto col-12">
            <h6><strong>3. Babak Semifinal</strong></h6>
            <li style="list-style: none">
              Peserta yang Iolos dari babak penyisihan dan babak Golden Ticket untuk semua tingkatan mengerjakan soal dalam bentuk Multiple Choice. Untuk Iolos ke babak selaniutnya diseleksi 30 peserta nilai tertinggi tiap tingkatan.
            </li>
          </div>
        </div>

        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-8 col-md-10 mx-auto col-12">
            <h6><strong>4. Babak Final</strong></h6>
            <ul>
              <li>Running Game : Soal ditempatkan pada daerah tertentu, peserta (SD / sederajat) mengambil soal untuk dikerjakan. Akan diseleksi 10 untuk masuk ke babak selanjutnya.</li>
              <li>Ballon Game : Soal ditempatkan pada balon, peserta (SD / sederajat) memilih balon kemudian dipecahkan lalu mengerjakan soal. Akan diseleksi 3 peserta dengan nilai tertinggi untuk masuk ke babak grand final.</li>
              <li>Theatre Game : Soal dalam bentuk video lalu peserta (SMP dan SMA sederajat) mengerjakan soal. Akan diseleksi 15 peserta untuk masuk ke babak selaniutnya.</li>
              <li>Bom Game : Tes tertulis, soal dikerjakan secara bersamaan (SMP dan SMA sederajat). Akan diseleksi 9 peserta untuk masuk ke babak selanjutnya.</li>
              <li>
                Tender Game : Soal ditampilkan pada layar, peserta (SMP dan SMA sederajat) menawar waktu untuk mengerjakan soal. Peserta dengan tawaran terendah berhak mengerjakan soal. Akan diseleksi 3 peserta untuk masuk ke babak grand
                final.
              </li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-8 col-md-10 mx-auto col-12">
            <h6><strong>5. Babak Grand Final</strong></h6>
            <ul>
              <li style="list-style: none;">Tes tertulis dengan bentuk cepat tepat (SD dan SMP sederajat). Persentase, bentuk soal
                tertulis, peserta mengerjakan soal lalu dipresentasikan pada tim juri (SMA sederajat)
                Matrix Game, bentuk soal tertulis babak ini merupakan babak rebutan, peserta memilih
                soal yang ditampilkan dalam bentuk matriks dan setiap entri pada matriks tersimpan bobot
                nilai (SMA sederajat).</li>
            </ul>
          </div>
        </div>


      </div>
    </section>
    <!-- END ABOUT 2 -->

    <!-- ABOUT 3 -->
    <section class="class section" id="class">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 text-center mb-5">
            <h2 data-aos="fade-up" data-aos-delay="200">Cara Mengikuti Mathematics Event XXII</h2>
          </div>

          <div class="col-lg-4 col-md-6 col-12 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="class-thumb">
              <div class="class-info">
                <i class="bi bi-people-fill"></i>
                <h3 class="mb-1">Pendaftaran babak Golden Ticket</h3>
                <li class="mt-3 text-justify" style="list-style: none">
                  Khusus pendaftar babak Golden Ticket (seleksi regional) pendaftaran dibuka mulai <strong>30 Desember 2021 sampai 29 Januari 2022 </strong>secara online dan tanggal<strong> 12 Februari 2022</strong> ditempat lomba, paling
                  lambat setengah jam sebelum lomba.
                </li>
              </div>
            </div>
          </div>

          <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12 text-center" data-aos="fade-up" data-aos-delay="500">
            <div class="class-thumb">
              <div class="class-info">
                <i class="bi bi-people-fill"></i>
                <h3 class="mb-1">Pendaftaran Online & Offline</h3>
                <li class="mt-3 text-justify">
                  Pendaftaran online pada tanggal <strong>30 Desember 2021 sampai 29 Februari 2022</strong> dapat dilakukan dengan : Daftar online dengan cara mengisi form pendaftaran/register di situs web Mathematics Event.
                </li>
                <li class="mt-3 text-justify">
                  Pendaftaran juga dapat dilakukan langsung ke sekretariat Mathematics Event XXII di ruang LFD 110 Himatika FMIPA Unhas, Jl. Perintis Kemerdekaan Km. 10 Tamalanrea, Makassar, Sulawesi Selatan.
                </li>
              </div>
            </div>
          </div>

          <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="class-thumb">
              <div class="class-info">
                <i class="bi bi-cash-stack"></i>
                <h3 class="mb-1 text-center">Kontribusi</h3>
                <li class="mt-3 text-justify" style="list-style: none">
                  Transfer kontribusi melalui no. Rek. 1554-01-001512-53-3 a.n Mathematics Event Bank BRI cab. Universitas Hasanuddin <strong>(catatan : konfirmasi setelah melakukan pembayaran melalui contact person panitia).</strong>
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END ABOUT 3 -->


        <!-- ABOUT 4 -->
    <section class="schedule section" id="schedule">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">Hadiah Mengikuti Mathematics Event XXII</h2>
          </div>
          <div class="col-lg-12 py-5 col-md-12 col-12">
            
            <table class="table table-bordered table-responsive-lg" data-aos="fade-up" data-aos-delay="300">
              <thead class="thead-light">
                <tr>
                  <th class="text-center" rowspan="2">Jenjang</th>
                  <th class="text-center" colspan="3">Hadiah</th>
                </tr>

                <tr>
                  <th class="text-center" colspan="1">Juara 1</th>
                  <th class="text-center" colspan="1">Juara 2</th>
                  <th class="text-center" colspan="1">Juara 3</th>
                </tr>
              </thead>

              <tbody>
                    <tr>
                        <td>SD/Sederajat</td>
                        <td>
                          <ol>
                          <li>Piala Bergilir Universitas Hasanuddin</li>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      </tr>

                      <tr>
                        <td>SMP/Sederajat</td>
                        <td>
                          <ol>
                          <li>Piala Bergilir Gubernur Sulawesi Selatan</li>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      </tr>

                      <tr>
                        <td>SMA/Sederajat</td>
                        <td>
                          <ol>
                          <li>Piala Bergilir Menteri Pendidikan Kebudayaan, Riset, dan Teknologi</li>
                          <li>Diprioritaskan Masuk Universitas Hasanuddin Jalur POSK</li>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      <td>
                        <ol>
                          <li>Piala Tetap</li>
                          <li>Piagam</li>
                          <li>Uang Tunai</li>
                        </ol>
                      </td>
                      </tr>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </section>


        <!-- END ABOUT 4 -->

        <!-- ABOUT 5 -->
        <section class="about section" id="about">
          <div class="container">
            <div class="row">
              <div class="mt-lg-2 mb-lg-0 mb-4 col-lg-10 col-md-10 mx-auto col-12">
                <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="300">Biaya Kontribusi Mathematics Event XXII</h2>
    
                <div class="row">
                  <div class="mt-lg-1 mb-lg-5 mb-4 col-lg-10 col-md-10 mx-auto col-12">
                    <table class="table table-bordered" data-aos="fade-up" data-aos-delay="300">
                      <thead class="thead-light">
                      <tr>
                        <th class="text-center">Jenjang</th>
                        <th class="text-center">Regional</th>
                        <th class="text-center">Penyisihan</th>
                      </tr>
                    </thead>

                    <tr>
                      <td>SD/Sederajat</td>
                      <td class="text-center">Rp50.000,-</td>
                      <td class="text-center">Rp65.000,-</td>
                    </tr>
                  
                    <tr>
                      <td>SMP/Sederajat</td>
                      <td class="text-center">Rp55.000,-</td>
                      <td class="text-center">Rp70.000,-</td>
                    </tr>

                    <tr>
                      <td>SMA/Sederajat</td>
                      <td class="text-center">Rp60.000,-</td>
                      <td class="text-center">Rp75.000,-</td>
                    </tr>

                    </table>
                  </div>
                </div>
          </div>
        </section>
        <!-- END ABOUT 5 -->

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
