<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>
    <!-- Link Owl Caroseul -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" />
    <!-- Link Box Icon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Link JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Link JS -->
    <script src="main.js"></script>
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Link JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

    <!-- HOME -->
    <section id="home">
      <h2>Bersama SMAN 9 Kupang, Kita Berprestasi</h2>
      <p>Sekolah yang sudah terbukti menghasilkan karakter-karakter Emas. Pengetahuan, Keterampilan, Perbedaan semua menjadi Kesatuan. Siap menjadi bagian selanjutnya?</p>

      <div class="btn">
        <a class="blue" href="#">Learn More</a>
        <a class="yellow" href="#">Visit Course</a>
      </div>
    </section>

    <div class="container-runtext">
      <div class="ticker">
        <div class="title"><h5>Informasi</h5></div>
        <div class="info">
          <marquee behavior="" direction="">
            <p>Selamat datang di Halaman utama website! Jadilah sang Mentari yang memberikan sinarnya, kita smansem kita berprestasi</p>
          </marquee>
        </div>
      </div>
    </div>
   

    <!-- New Sambutan -->
    <section id="sambutan" class="sambutan-container">
      <div class="row align-item-center">
        <div class="col-md-6 image">
          <img src="images/Foto Guru/Kepsek (1).jpeg" width="70%" alt="Kepala SMANSEM" />
        </div>
        <div class="col-md-5 info">
          <h2>Sambutan Kepala Sekolah</h2>
          <p>
            Remaja sekarang adalah calon-calon generasi penerus bangsa. Dengan bersekolah, kami dapat mengantar anak-anak untuk menentukan setiap masa depan mereka. Disini, mereka kami pupuk untuk dapat tumbuh menjadi mereka seutuhnya...
          </p>
          <div class="btn">
            <a class="blue" href="#">Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>

    <!-- New Kalkulasi Data -->
    <section class="counting">
      <!-- <h1>Kalkulasi</h1> -->
      <div class="box">
        <i class="fa-solid fa-user-graduate"></i>
        <h1 class="count" data-count="1200">1200+</h1>
        <h3>Guru & Pegawai</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-user-tie"></i>
        <h1 class="count" data-count="800">800+</h1>
        <h3>Siswa</h3>
      </div>
      <div class="box">
        <i class="fas fa-list"></i>
        <h1 class="count" data-count="45">45+</h1>
        <h3>Fasilitas</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-user-check"></i>
        <h1 class="count" data-count="5900">5900+</h1>
        <h3>Alumni</h3>
      </div>
    </section>

   
    <!-- FITUR -->
    <section id="features">
      <h1>Fasilitas Sekolah</h1>
      <p>Menghasilkan generasi emas untuk nusantara</p>
      <div class="fea-base">
        <div class="fea-box">
          <i class="fa-solid fa-school"></i>
          <h3>Ruang Kelas</h3>
          <p>Ruang kelas yang nyaman dan bersih, sehingga cocok untuk proses belajar mengajar</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-book"></i>
          <h3>Perpustakaan</h3>
          <p>Memiliki koleksi buku yang beragam untuk mendukung proses belajar siswa</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-flask"></i>
          <h3>Laboratorium</h3>
          <p>Laboratorium yang aman dengan berbagai alat dan bahan praktek di bidang Ilmu Pengetahuan</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-volleyball"></i>
          <h3>Lapangan Olahraga</h3>
          <p>Lapangan Olahraga yang luas, cocok untuk melakukan aktivitas fisik dan permainan</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-stethoscope"></i>
          <h3>Ruang UKS</h3>
          <p>Ruang Kesehatan yang dilengkapi perlengkapan dan fasilitas yang diperlukan untuk menjaga kesehatan siswa</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-burger"></i>
          <h3>Kantin</h3>
          <p>Kantin yang bersih dan higenis sebagai tempat menemani aktivitas belajar siswa</p>
        </div>
      </div>
    </section>

    <!-- JURUSAN -->
    <section id="course">
      <h1>Jurusan Ilmu</h1>
      <p>Bidang Ilmu sesuai minat bakatmu</p>
      <div class="course-box">
        <div class="courses">
          <img src="images/ipa.jpeg" alt="Gambar 1" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>Ilmu Pengetahuan Alam</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <span>(259 peminat)</span>
            </div>
          </div>
          <div class="harga">info</div>
        </div>

        <div class="courses">
          <img src="images/c2.jpg" alt="Gambar 2" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>Pemrograman</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <span>(259 peminat)</span>
            </div>
          </div>
          <div class="harga">Info</div>
        </div>

        <div class="courses">
          <img src="images/c3.jpg" alt="Gambar 2" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>Bahasa</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <span>(259 peminat)</span>
            </div>
          </div>
          <div class="harga">info</div>
        </div>

        <div class="courses">
          <img src="images/c4.jpg" alt="Gambar 2" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>Bahasa Inggris</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <span>(120 peminat)</span>
            </div>
          </div>
          <div class="harga">Info</div>
        </div>

        <div class="courses">
          <img src="images/c5.jpg" alt="Gambar 2" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>TIK</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <span>(320 peminat)</span>
            </div>
          </div>
          <div class="harga">info</div>
        </div>

        <div class="courses">
          <img src="images/c6.jpg" alt="Gambar 2" />
          <div class="detail">
            <span>updated 01/06/2023</span>
            <h6>Aksara</h6>
            <div class="bintang">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>

              <span>(29 peminat)</span>
            </div>
          </div>
          <div class="harga">info</div>
        </div>
      </div>
    </section>

    <!-- PRESTASI -->
    <section id="prestasi">
      <div class="container-prestasi">
        <div class="section-title">
          <h2>Prestasi Sekolah</h2>
        </div>
        <div class="section-item">
          <div class="row">
            <div class="col-md-6">
              <img class="section-item-thumbnail" src="images/foto3.jpg" alt="" />
            </div>
            <div class="col-md-6 col-item-kanan" >
              <div class="section-item-title">
                <h3>SMAN 9 Kupang Juara Lomba Volly dalam Perayaan HUT SMAN 5 Kupang</h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>24 Januari 2017</span>
                  <span><i class="fas fa-map-marked-alt"></i>Kupang</span>
                </div>
              </div>

              <div class="section-item-body">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laboriosam voluptatibus maxime beatae voluptatum quaerat doloribus totam cumque repellendus dolor, inventore debitis earum deserunt harum! Voluptas dicta
                  consectetur sequi fugiat, placeat fugit quis, illum voluptatum dolores, laudantium distinctio. Minus, reprehenderit. Distinctio obcaecati dolorum sit necessitatibus sunt. Consectetur cum reiciendis autem.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="section-item">
          <div class="row">
            <div class="col-md-6">
              <img class="section-item-thumbnail" src="images/foto4.jpg" alt="" />
            </div>
            <div class="col-md-6 col-item-kanan">
              <div class="section-item-title">
                <h3>SMAN 9 Kupang Berhasil Meraih Juara 2 Lomba Cerdas Cermat Ekonomi se-Kota Kupang</h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>24 Januari 2017</span>
                  <span><i class="fas fa-map-marked-alt"></i>Kupang</span>
                </div>
              </div>

              <div class="section-item-body">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laboriosam voluptatibus maxime beatae voluptatum quaerat doloribus totam cumque repellendus dolor, inventore debitis earum deserunt harum! Voluptas dicta
                  consectetur sequi fugiat, placeat fugit quis, illum voluptatum dolores, laudantium distinctio. Minus, reprehenderit. Distinctio obcaecati dolorum sit necessitatibus sunt. Consectetur cum reiciendis autem.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="section-item">
          <div class="row">
            <div class="col-md-6">
              <img class="section-item-thumbnail" src="images/foto5.jpg" alt="" />
            </div>
            <div class="col-md-6 col-item-kanan">
              <div class="section-item-title">
                <h3>SMAN 9 Kupang Berhasil Menjuarai Lomba Pidato se-Kota Kupang</h3>
                <div class="section-item-meta">
                  <span><i class="far fa-calendar-alt"></i>24 Januari 2017</span>
                  <span><i class="fas fa-map-marked-alt"></i>Kupang</span>
                </div>
              </div>

              <div class="section-item-body">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus laboriosam voluptatibus maxime beatae voluptatum quaerat doloribus totam cumque repellendus dolor, inventore debitis earum deserunt harum! Voluptas dicta
                  consectetur sequi fugiat, placeat fugit quis, illum voluptatum dolores, laudantium distinctio. Minus, reprehenderit. Distinctio obcaecati dolorum sit necessitatibus sunt. Consectetur cum reiciendis autem.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="tombol-selengkapnya">
          <a href="" class="btn btn-more">Lihat Prestasi Lainnya</a>
        </div>
      </div>
    </section>

    <!-- TENAGA PENDIDIK -->
    <section class="tenaga-pendidik">
      <div class="container-tp">
        <div class="section-title">
          <h2>Tenaga Pendidik</h2>
        </div>
        <div class="owl-carousel" id="tenaga-pendidik-slider">
          <div class="section-item">
          
        </div>
        </div>
        
      </div>
    </section>

    

    <!-- PROFIL -->
    <section id="ahli">
      <h1>Profil Komunitas</h1>
      <p>Menghasilkan generasi emas untuk nusantara</p>
      <div class="ahli-box">
        <div class="profil">
          <img src="images/pro1.webp" alt="profil1" />
          <h6>Maya Polly</h6>
          <p>Tim Multimedia</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>

        <div class="profil">
          <img src="images/ibusman92.jpg" alt="profil3" />
          <h6>Irene Thoi</h6>
          <p>Tim MUltimedia</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>

        <div class="profil">
          <img src="images/download kepsek.jpeg" alt="profil4" />
          <h6>Siti Hartati</h6>
          <p>Agama Islam</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="main.js"></script>
    <script>
      $(document).ready(function () {
        $('.num').counterup({
          Delay: 10,
          time: 1200,
        });
      });
    </script>
   
  </body>
</html>
