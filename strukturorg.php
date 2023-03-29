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

    <div class="tree">
      <ul>
        <li>
          <a href="#"><img src="images/pro2.webp" alt="" /><span>Kepala Sekolah</span></a>
          <ul>
            <li>
              <a href="#"><img src="images/pro1.webp" alt="" /><span>Grand Child</span></a>
              <ul>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><img src="images/pro1.webp" alt="" /><span>Child</span></a>
              <ul>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
                <li>
                  <a href="#"><img src="images/pro1.webp" alt="" /><span>Great Grand Child</span></a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><img src="images/pro1.webp" alt="" /><span>Child</span></a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

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
      $(document).ready(function () {
        $('.num').counterup({
          Delay: 10,
          time: 1200,
        });
      });
    </script>
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
