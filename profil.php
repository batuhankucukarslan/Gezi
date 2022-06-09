<?php include 'header.php'; 

$kullanicisor = $db->prepare("SELECT * FROM kullanici where id = ".$_SESSION['kullanici_id']);
$kullanicisor->execute(); 
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);



?>
     
        <div class="profile-body-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <?php 
                        if(isset($_SESSION['durum'])){
                        ?>
                        <div class="alert alert-warning" role="alert">
                          <?php 
                          echo $_SESSION['durum'];
                          unset($_SESSION['durum']);
                          ?>
                          <?php } ?>
                        <div class="profile-body">
                            <div style="margin-bottom: 50px;" ></div>
                            <div class="profile-info-table space-mb--40">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Ad Soyad</div>
                                    <div class="profile-info-block__value"><?php echo $kullanicicek['ad_soyad']; ?></div>
                                </div> 
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Telefon</div>
                                    <div class="profile-info-block__value"><?php echo $kullanicicek['telefon']; ?></div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">E-mail</div>
                                    <div class="profile-info-block__value"><?php echo $kullanicicek['mail']; ?></div>
                                </div>  
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Profil Güncelle</div>
                                    <div class="profile-info-block__value"><a href="edit-profil.php"><img src="assets/img/icons/edit.svg" class="injectable" alt=""></a></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of profile body  ====================-->
        <?php include 'footer.php'; ?>