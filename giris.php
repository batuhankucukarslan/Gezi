<?php include 'lib/baglan.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giriş</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">
    <!-- CSS
		============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/cssanimation.min.css">
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from above) -->
    <!--
			<link rel="stylesheet" href="assets/css/vendor.min.css">
			<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
			-->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-color--grey3">
    <!--====================  preloader area ====================-->
    <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="img-loader"></div>
            </div>
        </div>
    </div>
    <!--====================  End of preloader area  ====================-->
    <div class="body-wrapper space-pt--70 space-pb--120">
        <!-- auth page header -->
        <div class="auth-page-header space-mb--50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="auth-page-header__title">Hoşgeldiniz</h3>
                        <p class="auth-page-header__text">Lütfen giriş yapın</p>
                        <?php 
                        if(isset($_SESSION['durum'])){
                        ?>
                        <div class="alert alert-warning" role="alert">
                          <?php 
                          echo $_SESSION['durum'];
                          unset($_SESSION['durum']);
                          ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- auth page body -->
        <div class="auth-page-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Auth form -->
                        <div class="auth-form">
                            <form action="lib/islem.php" method="POST">
                                <div class="auth-form__single-field space-mb--30">
                                    <label for="emailAddress">Email</label>
                                    <input type="text" name="mail" id="emailAddress" placeholder="E mail adresinizi girin">
                                </div>
                                <div class="auth-form__single-field space-mb--30">
                                    <label for="password">Şifre</label>
                                    <input type="password" name="sifre" id="password" placeholder="Şifrenizi girin">
                                </div>
                                <div class="auth-form__single-field space-mb--40">
                                    <p class="auth-form__info-text">Henüz bir hesabınız yok mu? <a href="kayit.php">Kayıt ol</a></p>
                                </div>
                                <input type="submit" value="Giriş" name="giris-yap" class="auth-form__button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- SVG inject JS -->
    <script src="assets/js/plugins/svg-inject.min.js"></script>
    <!-- Slick slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from above) -->
    <!--
  <script src="assets/js/plugins/plugins.min.js"></script>
-->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>