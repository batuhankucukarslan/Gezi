<?php include 'lib/baglan.php'; 
if (!isset($_SESSION['kullanici_id'])) {
    header("location:giris.php");
    exit;
}
 

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anasayfa</title>
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
    <div class="body-wrapper space-pb--120">
        <!--====================  header area ====================-->
        <header class="sticker">
            <div class="header-wrapper">
                <div class="container space-y--15">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <!-- header logo -->
                            <div class="header-logo">
                                <a href="index.php">
                                    <img src="assets/logo.png" width="50px" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <!-- header menu trigger -->
                            <button class="header-menu-trigger" id="header-menu-trigger">
                                <img src="assets/img/icons/menu-2.svg" class="injectable" alt="">
                            </button>
                        </div>
                    </div>
                </div>
          
            </div>
        </header>
        <!--====================  End of header area  ====================-->
        <!--====================  mobile menu overlay ====================-->
        <div class="offcanvas-menu" id="offcanvas-menu">
          
            <div class="offcanvas-navigation-wrapper space-mt--40">
                <ul class="offcanvas-navigation"> 
                    <li><span class="icon"><img src="assets/img/icons/profile-two.svg" class="injectable" alt=""></span><a href="profil.php">Profil</a></li> 
                    <li><span class="icon"><img src="assets/img/icons/wishlist.svg" class="injectable" alt=""></span><a href="favori.php">Favoriler</a></li>  
                    <li><span class="icon"><img src="assets/img/icons/exit.svg" class="injectable" alt=""></span><a href="cikis.php">Çıkış</a></li>  
                </ul>
            </div>
        </div>