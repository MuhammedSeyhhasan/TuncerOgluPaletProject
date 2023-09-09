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
        <a href="<?php echo e(route('home.index')); ?>" class="navbar-brand">TUNCER OĞLU 
            <span class="text-warning">PALET</span>
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
                             <i class="bi bi-facebook">FACEBOOK</i>
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

<?php echo $__env->yieldContent('about'); ?>
 
<footer class="footer-area bg-dark p-3">
    <div class="container">
        
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-white text-center">
                <a href="#" class="position-absolute bottom-5 end-0 p-3">
                    <i class="bi bi-sort-up-alt h2 text-warning"></i>
                </a>
                    <p class="company-name">All Rights Reserved &copy; 2020 TUNCER OĞLU PALET <br> Design By:
                        <a class="text-center text-secondary" href="https://www.instagram.com/muhammedseyhhasan/" target="_blank"> 
                           <i class="bi bi-instagram text-center">Muhammed Şeyhhasan</i></a>
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
</html><?php /**PATH C:\xampp\htdocs\ForTuncer\resources\views/layout.blade.php ENDPATH**/ ?>