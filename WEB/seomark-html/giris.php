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

  
</head>


  <title>Deneme</title>

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

<body>
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
            
            
            
            <a class="" href="contact.php">
              GİRİŞ YAP
            </a>
          </div>
        </div>
        <a class="navbar-brand" href="index.html">
          <span>
          
		 KURSİVA


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

		  <?php
	  $sql="select * FROM kisiler where kisi_id='$_SESSION[user_id]' ;";
$sorgu= @mysqli_query($baglanti,$sql);
$sonuc=mysqli_fetch_array($sorgu);
echo "$sonuc[adi] $sonuc[soyadi]";
echo "<a href=logout.php>ÇIKIŞ</a>";  
?> 

        </div>

        <div class="name_style">
          <h6>
        
           K
		   U
           R
		   S
           L
           A 
           R 
            
            
            
            
            
            
          </h6>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="box">
        <div class="detail-box">
          <a class="navbar-brand" href="index.html">
            <span>
              
			
MEYOGİ.COM





            </span>
          </a>


		

          <div class="carousel slide slider_text_carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="heading_box">
                  <h1>

				  <span >
                      BİLGİYE
                    </span>
                    <span>
                      YOLCULUK
                    </span>
                    <span>
                      BAŞLASIN!
                    </span>
                   
                    
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <div class="heading_box">
                  <h1>
                    <span>
                      KENDİNİ 
                    </span>
					<span>
                      YENİLE
                    </span>
                    <span>
                      YETENEKLERİNİ 
                    </span>
                    <span>
                      KEŞFET!
                    </span>
                    
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <div class="heading_box">
                  <h1>
                    <span>
                      SINIRLARINI
                    </span>
                    <span>
                      ZORLA...
                    </span>
                  
                  </h1>
                </div>
              </div>
            </div>
          </div>

          <div class="btn-box">
            <a href="" class="btn-1">
              İLETİŞİM
            </a>
            <a href="" class="btn-2">
              Daha Fazla...
            </a>
          </div>
        </div>






		












        <div class="img-box">
          <div class="carousel slide slider_image_carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider-img.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider-img2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider-img3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- feature section -->

  <section class="feature_section ">
    <div class="carousel_btn-box">
      <a class="slider_btn_prev" href="" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="slider_btn_next" href="" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-fluid service_container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box">
            <div class="number_box">
              <h5>
                01
              </h5>
            </div>
            <h4>
			ARAŞTIRMA PROJESİ
            </h4>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box">
            <div class="number_box">
              <h5>
                02
              </h5>
            </div>
            <h4>
			FİKİR BULUN
            </h4>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box">
            <div class="number_box">
              <h5>
                03
              </h5>
            </div>
            <h4>
			OPTİMİZASYONA BAŞLA
            </h4>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box">
            <div class="number_box">
              <h5>
                04
              </h5>
            </div>
            <h4>
			HEDEFİNE ULAŞ
            </h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  <!-- about section -->

  <section class="wedo_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          EĞİTİMLERİMİZ
        </h2>
        <p>
         
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box pr-0 pr-lg-5">
            <div class="img-box">
              <img src="images/wedo-img2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                EĞİTİM BİLİMİNE GİRİŞ
              </h5>
              <p>
              Bu dersin genel amacı, eğitim biliminin temel kavramlarını tanımak, eğitimin hukuki, sosyal,kültürel, tarihî, politik, ekonomik, felsefi ve psikolojik temellerini irdelemek, eğitim biliminde araştırma yöntemlerini tanımak, öğretmenlik mesleği ve öğretmenin niteliklerini açıklamak, öğretmen eğitiminin özelliklerini ve gelişimini tanımak, öğretmen eğitimindeki gelişmeleri analiz etmek ve eğitim bilimindeki yönelimleri irdelemektir.Eğitim ve öğretimle ilgili temel kavramlar; eğitimin amaçları ve işlevleri; eğitimin diğer alanlarla ve bilimlerle ilişkisi; eğitimin hukuki, sosyal, kültürel, tarihî, politik, ekonomik, felsefi ve psikolojik temelleri; eğitim bilimlerinde yöntem; bir eğitim ve öğrenme ortamı olarak okul ve sınıf; öğretmenlik mesleği ve öğretmen yetiştirmede güncel gelişmeler; yirmi birinci yüzyılda eğitimle ilgili yönelimler.
              </p>
              <a href="">
                Daha Fazla...
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box pr-0 pr-lg-5">
            <div class="img-box">
              <img src="images/wedo-img3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                EĞİTİM PSİKOLOJİSİ
              </h5>
              <p>
              Bu dersin amacı, öğretmen adaylarına eğitim sürecinde öğrencilerin gelişimsel özellikleri ve öğrenme süreçleri hakkında bilgi vermek ve bir anlayış kazandırmaktır.Eğitim-Psikoloji ilişkisi, eğitim psikolojisinin tanımı ve işlevleri, öğrenme ve gelişim ile ilgili temel kavramlar, gelişim özellikleri (bedensel, bilişsel, duygusal, sosyal ve ahlaki gelişim), öğrenme kuramları, öğrenme kuramlarının öğretim süreçlerine yansımaları, etkili öğrenme, öğrenmeyi etkileyen faktörler (motivasyon, bireysel faktörler, grup dinamiği ve bu faktörlerin sınıf içi öğretim sürecine etkisi).
              </p>
              <a href="">
                Daha Fazla...
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box pr-0 pr-lg-5">
            <div class="img-box">
              <img src="images/wedo-img4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                ÖĞRETİM İLKE VE YÖNTEMLERİ
              </h5>
              <p>
              Etkili bir öğretimin gerçekleştirilebilmesi için öğretim etkinliklerinin planlanması, öğrenci merkezli öğretme-öğrenme süreçlerinin düzenlenmesinde kullanılan öğrenme yaklaşımları, öğretim stratejileri ile öğretim yöntem ve tekniklerinin uygulanmasına yönelik bilgi ve becerileri geliştirmektir.Öğretimle ilgili temel kavramlar, öğrenme ve öğretim ilkeleri, öğretimde planlı çalışmanın önemi ve yararları, öğretimin planlanması (ünitelendirilmiş yıllık plan, günlük plan ve etkinlik örnekleri), öğrenme ve öğretim stratejileri, öğretim yöntem ve teknikleri, bunların uygulama ile ilişkisi, öğretim araç ve gereçleri, öğretim hizmetinin niteliğini artırmada öğretmenin görev ve sorumlulukları, öğretmen yeterlikleri.
              </p>
              <a href="">
                Daha Fazla...
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box pr-0 pr-lg-5">
            <div class="img-box">
              <img src="images/wedo-img1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                EĞİTİMDE PROGRAM GELİŞTİRME
              </h5>
              <p>
              Program geliştirme ile ilgili temel kavramlar bilgisi. Program geliştirmenin diğer bilimlerle olan ilişkisini kavrayabilme. Program geliştirmenin öğeleri arasındaki ilişkileri kavrayabilme. Belli başlı program geliştirme yaklaşımlarını karşılaştırabilme. Belli başlı program geliştirme modellerini analiz edebilme. Bir eğitim programını belli ölçütler açısından eleştirebilme. Program geliştirme alanındaki ulusal ve uluslararası gelişmelerin farkında oluş. Program geliştirme alanındaki ulusal ve uluslararası literatürü izlemeye istekli oluş.
              </p>
              <a href="">
              Daha Fazla...
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  
  <!-- end about section -->

  <!-- help section -->


  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Ders Kayıt
              </h2>
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
          <div class="img-box">
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




  

  <!-- end help section -->


  <!-- we do section -->


  <section class="help_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ALINAN DERSLER<br>
              </h2>
            </div>
            <p>
              
			<?php   




mysqli_set_charset($baglanti, "utf8");
	 
$sql="select * FROM kurslar,kisiler,kisi_kurs  where    kisi_kurs.kisi_id=kisiler.kisi_id        and       kisi_kurs.kurs_id=kurslar.ders_id    and kisi_kurs.kisi_id ='$_SESSION[user_id]' ;";

mysqli_set_charset($baglanti, "utf8");

    $sorgu= @mysqli_query($baglanti,$sql);

	  mysqli_set_charset($baglanti, "utf8");

    while ($sonuc=mysqli_fetch_array($sorgu))
{
?> 


            </p>

			<p  style="color:black;"   ><b>
	<?php

	mysqli_set_charset($baglanti, "utf8");
	echo utf8_encode($sonuc['ders_adi']);


?>


   </b> </p>    
	<p> <?php  echo" Ders $sonuc[t] saat teorik $sonuc[u] saat uygulamadan oluşmaktadır"; ?></p>
 

<?php

}
?>




           
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/help-img.jpg" alt="" />
            <div class="play_btn">
              <button>
                <i class="fa fa-play" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 






















  
  <!-- end we do section -->

  <!-- news section -->

  

  <!-- end news section -->


  <!-- client section -->

 

  <!-- end client section -->


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                GİRİŞ YAP
              </h2>
            </div>
            <form action="login.php" method="post">
              
              <div>
                <input type="email"  name="user" placeholder="Email" />
              </div>
              <div>
                <input type="password" name="pass" placeholder="Password" />
              </div>
              
              <div class="d-flex ">
                <button>
                  GİRİŞ YAP
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
              <a class="active" href="index.html">
                
              
              </a>
              <a class="" href="about.html">
                
               
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
           ABONE OL
          </h4>
          <form action="#">
            <input type="text" placeholder="Mail giriniz..." />
            <button type="submit">
              Kayıt Ol
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


