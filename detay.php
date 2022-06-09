<?php
include 'header.php'; 

$kategorisor = $db->prepare("SELECT * FROM kategori_alt where id = ".$_GET['id']);
$kategorisor->execute(); 
$kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC);
?>
        <!--====================  product image slider ====================-->
        <div class="product-image-slider-wrapper space-pb--30 space-mb--30">
            <div class="product-image-single">
                <img src="<?php echo $kategoricek['kategori_resim']; ?>" class="img-fluid" alt="">
            </div> 
        </div>
        <!--====================  End of product image slider  ====================-->
        <!--====================  product content ====================-->
        <!-- product content header -->
        <div class="product-content-header-area border-bottom--thick space-pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-content-header">
                            <div class="product-content-header__main-info">
                                <h3 class="title"><?php echo $kategoricek['kategori_ad']; ?> <small><?php echo $kategoricek['saatler']; 
                               echo "   ";

                               if ($kategoricek['ucret'] == 0 or $kategoricek['ucret'] == NULL ) {
                                    echo "Ücretsiz";
                                }else{
                                    echo $kategoricek['ucret']." ₺";
                                }
                                
                                ?></small></h3> 
                                <div class="rating">
                                    <ul class="rating__stars">
                                        <li><img src="assets/img/icons/star.svg" class="injectable" alt=""></li>
                                        <li><img src="assets/img/icons/star.svg" class="injectable" alt=""></li>
                                        <li><img src="assets/img/icons/star.svg" class="injectable" alt=""></li>
                                        <li><img src="assets/img/icons/star.svg" class="injectable" alt=""></li>
                                        <li><img src="assets/img/icons/star.svg" class="injectable" alt=""></li>
                                    </ul>
                                    <span class="rating__text"><?php 
                                    $puansor = $db->prepare("SELECT * FROM yorumlar where kategori_alt_id = ".$_GET['id']);
                                    $puansor->execute(); 
                                    $say = 0;
                                    $puantop = 0;
                                    while ($puancek = $puansor->fetch(PDO::FETCH_ASSOC)) {
                                        $say++;
                                        $puantop += $puancek['puan'];
                                    }
                                    $puan = $puantop / $say;
                                    if (substr($puan,0,3) < 1) {
                                        echo 5;
                                     }else{
                                         echo substr($puan,0,3);
                                     }
                                    ?></span>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>

   
        <!-- product content description -->
        <div class="product-content-description border-bottom--thick space-pt--25 space-pb--25">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="space-mb--25"><?php echo $kategoricek['kategori_icerik']; ?></p>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- product content safety -->
        
        <!-- product color picker -->
        <div class="product-color-picker border-bottom--thick space-pt--25 space-pb--25">
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
                        </div>
                        <?php } ?>
                        <h3 class="space-mb--20">Yorum Yap</h3>
                        <form action="lib/islem.php" method="POST"> 
                            <div class="auth-form">
                            <label for="">Puanla</label>
                            <select  class="form-select"  name="puan" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select><br>
                           <textarea name="icerik" >  </textarea><br>
                           <input type="hidden" name="kategori_id" value="<?php echo $_GET['id']; ?>">
                           <input type="submit" name="yorum-yap" value="Gönder" class="btn btn-success">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- product content description -->
        <div class="product-content-description space-pt--25 space-pb--25">
            <div class="container">
                <div class="row">
                    <?php 
                    $yorumsor = $db->prepare("SELECT * FROM yorumlar where kategori_alt_id = ".$_GET['id']." order by id desc");
                    $yorumsor->execute(); 
                    while($yorumcek = $yorumsor->fetch(PDO::FETCH_ASSOC)){

                        $kullanicisorr = $db->prepare("SELECT * FROM kullanici where id = ".$yorumcek['kullanici_id']);
                        $kullanicisorr->execute(); 
                        $kullanicicekk = $kullanicisorr->fetch(PDO::FETCH_ASSOC);
 
                    ?>
                    <div class="col-12">
                        <br>
                        <h4 class="space-mb--5"><?php echo $kullanicicekk['ad_soyad']; ?></h4>
                        <p><?php
                        echo $yorumcek['icerik']; ?> <br><small><?php echo substr($yorumcek['olusturmatarih'],0,16) ?></small></p>
                    </div>
                    <?php } ?>            
                     
                </div>
            </div>
        </div>
     
     <?php include 'footer.php'; ?>