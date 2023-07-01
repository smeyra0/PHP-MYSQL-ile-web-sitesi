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



  <title>DERS KAYIT</title>

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
              Ana Sayfa
            </a>
            <a class="active" href="about.php">
              Ders Kayıt
            </a>
           
            <a class="" href="contact.php">
              Giriş Yap
            </a>
          </div>
        </div>
        <a class="navbar-brand" href="index.html">
          <span>
            DERS KAYIT
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


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                KAYIT
              </h2>
            </div>

</div>


<form action="giris.php" method="post">
  <?php
  mysqli_set_charset($baglanti, "utf8");
  $sql = "SELECT * FROM kurslar;";
  $sorgu = mysqli_query($baglanti, $sql);

  while ($sonuc = mysqli_fetch_array($sorgu)) {
    $ders_id = $sonuc['ders_id'];
    $ders_adi = $sonuc['ders_adi'];
    $saat_teorik = $sonuc['t'];
    $saat_uygulama = $sonuc['u'];

    // Burada kullanıcının aynı dersi alıp almadığını kontrol ediyoruz
    $musteri_id = $_SESSION["user_id"];
    $sql_kontrol = "SELECT * FROM musteri_kurs WHERE musteri_id = '$musteri_id' AND kurs_id = '$ders_id'";
    $sorgu_kontrol = mysqli_query($baglanti, $sql_kontrol);
    $kayit_sayisi = mysqli_num_rows($sorgu_kontrol);
    ?>

    <p>
      <b style="color: black; font-size: 16px;"><?php echo $ders_adi; ?></b><br>
      <?php echo "Ders $saat_teorik saat teorik $saat_uygulama saat uygulamadan oluşmaktadır"; ?><br>
      <input type="checkbox" name="secim[]" value="<?php echo $ders_id; ?>" <?php if ($kayit_sayisi > 0) echo "disabled"; ?>>
      <?php
      if ($kayit_sayisi > 0) {
        echo "Bu dersi zaten aldınız";
      }
      ?>
    </p>

  <?php
  }
  ?>

  <input type="hidden" name="islem" value="1">
  <input type="submit" value="EKLE">
</form>







              
              </div>
            
          
        </div>
        <div class="col-md-6">
          <div class="img-box"   >
            <div class="stripe_design sd1"></div>
            <div class="stripe_design sd2"></div>
            <div class="stripe_design sd3"></div>
            <div class="stripe_design sd4"></div>
            <div class="stripe_design sd5"></div>
            <div class="stripe_design sd6"></div>
            <img src="images/about-img.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              İletişim
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
              <a class="active" href="about.html">
               
              </a>
              <a class="" href="service.html">
                
              </a>
              <a class="" href="testimonial.html">
                
              </a>
              <a class="" href="news.html">
              
              </a>
              <a class="" href="contact.html">
                
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