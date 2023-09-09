<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('public/css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>TUNCER OGUL PALET</title>
</head>
<body>

    

<!-- First Navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href=" <?php echo e(route('home.index')); ?>" class="navbar-brand">
             TUNCER OĞLU <span class="text-warning">PALET</span>
        </a>

        <!-- Toggle button for collapsing menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible menu -->
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo e(route('home.index')); ?>" class="nav-link">ANASAYFA</a></li>
                <li class="nav-item"><a href="<?php echo e(route('home.urunlerimiz')); ?>" class="nav-link">ÜRÜNLERİMİZ</a></li>
                <li class="nav-item"><a href="<?php echo e(route('home.hakimizda')); ?>" class="nav-link">HAKKIMIZDA</a></li>
                <li class="nav-item"><a href="<?php echo e(route('home.iletisim')); ?>" class="nav-link">İLETİŞİM</a></li>
            </ul>
        </div>  
    </div>
</nav>
<?php echo $__env->yieldContent('about'); ?>
  
  <!-- Second Navbar -->
  <nav class="navbar navbar-expand-md bg-warning navbar-light p-1">
    <div class="container">
      <div class="collapse navbar-collapse text-right">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link"> 
            <i class=" bi bi-telephone-forward"></i> +09 536 603 8656 | +09 531 726 1931</a></li>
          <li class="nav-item"><a class="nav-link">
            <i class=" bi bi-envelope-at"></i>
            tunceroglupalet@gmail.com</a></li>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                          <i class="bi bi-facebook"> FACEBOOK</i>
                        </a></li>
                    <li> 
                    <a href="#" class="nav-link">
                             <i class="bi bi-whatsapp">WHATSAPP</i>
                        </a>
                    </li>
                    <li> 
                        <a href="#" class="nav-link">
                            <i class="bi bi-twitter">TWITTER</i>
                        </a>
                    </li>
                </ul>
            </div>            
        </ul>
      </div>
    </div>
  </nav>



<!--- palet --->
<section id="PALET" class="bg-light text-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2> <span class="text-warning">TUNCER OĞLU</span>'na Hoş Geldiniz</h2>
                <p class="lead">TUNCER OĞLU palet üretim ve tedarik şirketidir. Yıllar süren tecrübesi ve uzman ekibi ile, işletmenizin lojistik ihtiyaçlarına uygun yüksek kaliteli paletler sunuyoruz, Tuncer Oğlu Palet ile işlerinizde taşımanın gücünü keşfedin

                </p>
                <p>SUNULAN HIZMETLERIMIZ:</p>
                <ul>
                    <li>Yüksek Kaliteli Palet Üretimi: Müşterilerimizin ihtiyaçlarına uygun farklı boyutlarda, tiplerde ve taşıma kapasitelerinde özel paletler üretiyoruz. Güvenilir ve dayanıklı malzemeler kullanarak, tüm paletlerimiz uzun ömürlü ve güvenli taşıma için optimize edilmiştir.</li>
                    <li>İkinci kaliteli paletler: Tuncer Oğlu Palet olarak, uzun yıllara dayanan deneyimimizle ikinci kaliteli paletler üretiyoruz İkinci kaliteli paletler, ekonomik ve sürdürülebilir bir lojistik çözüm arayan işletmeler için mükemmel bir seçenektir.</li>
                    <li>Hızlı ve Güvenilir Teslimat: Müşteri memnuniyeti ve zamanında teslimat önceliklerimizdendir. Esnek ve etkili tedarik zincirimiz sayesinde, paletleriniz zamanında ve sorunsuz bir şekilde size ulaşır.</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/new1.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new22.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new2.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new4.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/new5.jpg" alt="Image">
                        </div>
                        <!-- Add more slides for additional images -->
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>





<footer class="footer-area bg-dark p-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-white">
                
                <h3 class="text-warning">HAKKIMIZDA</h3>
                <p>Tuncer Oğlu Palet olarak, lojistik ihtiyaçlarınıza yönelik çözümler sunuyoruz. Uzun yıllara dayanan deneyimimiz ve kaliteli üretim anlayışımızla palet sektöründe öncü bir markayız. İhtiyaca uygun tasarım ve üretim yeteneklerimizle işletmenizin taşıma ve depolama süreçlerini daha verimli ve güvenilir hale getiriyoruz. Sektördeki lider konumumuzla, her zaman kalite, güven ve yenilik odaklı çözümler sunmayı hedefliyoruz."</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-warning">MENÜ</h3>
                
                <p><a href="<?php echo e(route('home.index')); ?>" class="text-white"><i class="mdi mdi-chevron-right mr-1"></i>ANASAYFA</a></p>
                
                <p><a href="<?php echo e(route('home.urunlerimiz')); ?>" class="text-white"><i class="mdi mdi-chevron-right mr-1"></i>ÜRÜNLERİMİZ</a></p>
                
                <p><a href=" <?php echo e(route('home.hakimizda')); ?>" class="text-white"><i class="mdi mdi-chevron-right mr-1"></i>HAKKIMIZDA</a></p>
                
                <p><a href="<?php echo e(route('home.iletisim')); ?>" class="text-white"><i class="mdi mdi-chevron-right mr-1"></i>İLETİŞİM</a></p>
                <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="" target="_blank" title="facebook" class="rounded"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="rounded"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="rounded"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>    
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 text-white">
                <h3 class="text-warning">İLETİŞİM BİLGİLERİMİZ</h3>
                <p class="lead">Atatürk MH. Özdemir CD. 224 SK. NO:8
                                MANISA/TURGUTLU</p>
                <p class="lead">+09 531 726 1931</p>
                <p class="lead">tunceroglupalet@gmail.com
                </p>

            </div>
            <div class="col-lg-3 col-md-6 text-white">
                <h3 class="text-warning ">ÇALIŞMA SAATLERİ</h3>
                <p><span class="text-color">Pt :</span> 8:00 - 18:00</p>
                <p><span class="text-color">Sa :</span> 8:00 - 18:00</p>
                <p><span class="text-color">Ça :</span> 8:00 - 18:00</p>
                <p><span class="text-color">Pe :</span> 8:00 - 18:00</p>
                <p><span class="text-color">Cu :</span> 8:00 - 18:00</p>
                <p><span class="text-color">Ct :</span> 8:00 - 14:00</p>
                <p><span class="text-color">Pa :</span> Kapalı</p>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-white text-center">
                <a href="#" class="position-absolute bottom-5 end-0 p-3">
                    <i class="bi bi-sort-up-alt h2 text-warning"></i>
                </a>    
                    <p class="company-name">All Rights Reserved &copy; 2020 TUNCER OĞLU PALET <br> Design By:
                        <a class="text-center text-secondary" href="tel: 0095366038656" target="_blank"> 
                           <i class="bi text-center">Muhammed Şeyhhasan</i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
        










<!-- Add Bootstrap JS and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\ForTuncer\resources\views/welcome.blade.php ENDPATH**/ ?>