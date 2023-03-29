<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>

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
    <section id="tentang-home">
      <h2>Tentang SMAN 9 Kupang</h2>
    </section>

    <section id="tentang-container">
      <div class="tentang-img">
        <img src="images/a.png" alt="profil tentang" />
      </div>

      <div class="tentang-text">
        <h2>Selamat datang di SMAN 9 Kupang, Unggul Terampil Berbudi Luhur</h2>
        <p>Kamu dapat menjelajah menu ini untuk melihat informasi mengenai Guru, Siswa, dan Alumni. Jadilah bagian di dalamnya. Enjoy your journey!</p>

        <div class="tentang-fitur">
          <img src="images/fe2.png" alt="fitur pertama" />
          <div class="fitur-text">
            <h5>30+ Tenaga Ahli</h5>
            <p>Beragam latar belakang profesi siap memberikan pengetahuan dan keterampilan kepada para peserta didik</p>
          </div>
        </div>

        <div class="tentang-fitur">
          <img src="images/fe1.png" alt="fitur kedua" />
          <div class="fitur-text">
            <h5>800+ Siswa</h5>
            <p>Ratusan Siswa-siswa berasal dari berbagai daerah, yang siap membawa perubahan</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FITUR -->
    <section id="features">
      <h1>Kunci Sukses</h1>
      <p>Menghasilkan generasi emas untuk nusantara</p>
      <div class="fea-base">
        <div class="fea-box">
          <i class="fa-solid fa-graduation-cap"></i>
          <h3>Disiplin</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, nihil!</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-file-shield"></i>
          <h3>Mau</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, nihil!</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-award"></i>
          <h3>Apaa</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, nihil!</p>
        </div>
      </div>
    </section>

    <!-- TRUST -->
    <section id="trust">
      <h1>Partner</h1>
      <p>Telah bekerja sama dengan berbagai perusahaan besar</p>
      <div class="trust-img">
        <img src="images/trust (1).png" alt="" />
        <img src="images/trust (2).png" alt="" />
        <img src="images/trust (3).png" alt="" />
        <img src="images/trust (4).png" alt="" />
        <img src="images/trust (5).png" alt="" />
        <img src="images/trust (6).png" alt="" />
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>News Letter</h3>
        <p>You can trust us. We Only send promo offers</p>
        <div class="subscribe">
          <input type="text" placeholder="Your Email Address" />
          <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
      </div>

      <div class="hak-cipta">
        <p>Copyright ©SMA Negeri 9 Kupang 2022</p>

        <div class="pro-links">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </footer>

    <script src="main.js"></script>
    <script>
      $('#menu-btn').click(function () {
        $('nav .navigation ul').addClass('active');
      });
      $('#menu-close').click(function () {
        $('nav .navigation ul').removeClass('active');
      });
    </script>
  </body>
</html>
