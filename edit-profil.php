<?php include 'header.php'; ?>
        <!--====================  End of mobile menu overlay  ====================-->
        <!--====================  breadcrumb area ====================-->
        <div class="breadcrumb-area space-pt--5 space-pb--25">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-title">Profil güncelle</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of breadcrumb area  ====================-->
        <!--====================  edit profile body ====================-->
        <div class="edit-profile-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- edit profile form -->
                        <div class="edit-profile-form">
                            <form action="lib/islem.php" method="POST">
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="fullName">Ad Soyad</label>
                                    <input type="text" name="adsoyad" id="fullName" placeholder="Ad soyad girin">
                                </div> 
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="phoneNo">Telefon</label>
                                    <input type="text" name="telefon" id="phoneNo" placeholder="Telefon girin">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="emailAddress">Email</label>
                                    <input type="text" name="mail" id="emailAddress" placeholder="E posta girin">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="shippingAddress">Şifre</label>
                                    <input type="password" name="sifre" id="emailAddress" placeholder="Şifrenizi girin">
                                </div>
                                <input class="edit-profile-form__button" type="submit" value="Güncelle" name="guncelle">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of edit profile body  ====================-->
        <?php include 'footer.php'; ?>