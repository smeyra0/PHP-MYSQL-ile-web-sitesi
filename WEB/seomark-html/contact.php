<?php
include("baglanti.php");
session_start();
if($_SESSION["login"])
{
    $islem=$_POST["islem"];
    $secim=$_POST["secim"];
    if ($islem=="1")
    {
        for($i=0;$i<5;$i++)
         if ($secim[$i]<>"")
         {
$sql_ekle="insert into musteri_kurs(musteri_id,kurs_id) values('$_SESSION[user_id]','$secim[$i]');";
@mysqli_query($baglanti,$sql_ekle);
         }
    }

	
}
{
?>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Giriş</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="custom_menu-btn">
          <button onclick="openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="menu_btn-style ">
            <button onclick="closeNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div class="overlay-content">
            <a class="" href="giris.php">
              ANA SAYFA
            </a>
            <a class="" href="about.php">
              DERS KAYIT
            </a>
           
            <a class="active" href="contact.php">
              Giriş
            </a>
          </div>
        </div>
        <a class="navbar-brand" href="index.html">
          <span>
            GİRİŞ
          </span>
        </a>
        <div class="user_option">
          <form class="form-inline">
            <button class="btn  nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
          <a href="">
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </div>
        <div class="name_style">
          <h6>
            S
            e
            o
            M
            a
            r
            k
            e
            t
            i
            n
            g
          </h6>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
              GİRİŞ
              </h2>
            </div>
            <form action="login.php" method="post">
             
              <div>
                <input type="email"  name="user" placeholder="Mail Giriniz..." />
              </div>
              <div>
                <input type="password" name="pass" placeholder="Şifreniz..." />
              </div>
             
              <div class="d-flex ">
                <button>
                  Giriş Yap
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6  px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              İLETİŞİM
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Lokasyon
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Telefon +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  deneme@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              
            </h4>
            <div class="info_links">
              <a class="" href="index.html">
              
              </a>
              <a class="" href="about.html">
                
              </a>
              <a class="" href="service.html">
               
              </a>
              <a class="" href="testimonial.html">
                
              </a>
              <a class="" href="news.html">
                
              </a>
              <a class="active" href="contact.html">
               
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
             
            </h4>
            <p>
            
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <h4>
            ABONELİK
          </h4>
          <form action="#">
            <input type="text" placeholder="Mail Giriniz..." />
            <button type="submit">
              ABONE OL
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <p>
            &copy; <span id="displayYear"></span>
            <a href="https://html.design/">Sümeyra Satılmış</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>
<?php
}
?>