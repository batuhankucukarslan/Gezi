<?php 
include "header.php";

?>
    <?php 
    $kategorisor = $db->prepare("SELECT * FROM kategori ");
    $kategorisor->execute(); 
    while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {
         
    ?>
        <div class="banner-area space-mb--40">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-content">
                            <div class="banner-content__image">
                                <a href="kategori-detay.php?id=<?php echo $kategoricek['id']; ?>">
                                    <img src="<?php echo $kategoricek['resim']; ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="banner-content__text">
                                <h3 class="title"><?php echo $kategoricek['kategori_ad']; ?></h3> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>

<?php 
include "footer.php";

?>
