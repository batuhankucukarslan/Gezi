 
         <?php include 'header.php'; ?>
        <!--====================  End of shop header  ====================-->
        <!--====================  products area ====================-->
        <div class="shop-products-area">
            <!-- shop grid products -->
            <div class="shop-grid-products-wrapper space-mb-m--20">
                <div class="container">
                    <div class="row row-10">
                        <?php 
                            $kategorisor = $db->prepare("SELECT * FROM kategori_alt where kategori_id = ".$_GET['id']);
                            $kategorisor->execute(); 
                            while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {
                                 
                        ?>
                        <div class="col-6">
                            <div class="grid-product space-mb--20">
                                <div class="grid-product__image">
                                    <a href="detay.php?id=<?php echo $kategoricek['id']; ?>">
                                        <img src="<?php echo $kategoricek['kategori_resim'] ?>" class="img-fluid" alt="">
                                    </a> 
                                </div>
                                <div class="grid-product__content">
                                    <h3 class="title"><a href="detay.php?id=<?php echo $kategoricek['id']; ?>"><?php echo $kategoricek['kategori_ad'] ?>
                                
                                    <?php 
                                    $puansor = $db->prepare("SELECT * FROM yorumlar where kategori_alt_id = ".$kategoricek['id']);
                                    $puansor->execute(); 
                                    $say = 0;
                                    $puantop = 0;
                                    while ($puancek = $puansor->fetch(PDO::FETCH_ASSOC)) {
                                        $say++;
                                        $puantop += $puancek['puan'];
                                    }
                                    $puan = $puantop / $say;
                                    echo "<img src='assets/img/icons/star.svg' class='injectable' alt=''>";
                                    if (substr($puan,0,3) < 1) {
                                       echo 5;
                                    }else{
                                        echo substr($puan,0,3);
                                    }
 
                                    ?>


                                
                                </a></h3>
                                     
                                </div>
                            </div>
                        </div>
                     <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of products area  ====================-->
        <!--====================  footer area ====================-->
     <?php include 'footer.php'; ?>